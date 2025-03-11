import React, { useEffect, useRef, useState } from 'react';
import { Input, Button, Select, SelectItem, Avatar } from "@nextui-org/react";
import { useForm } from "@inertiajs/react";
import IconSave from "../../../../public/icons/png/icon-save.png";
import IconAddNewLink from "../../../../public/icons/png/icon-add-profile.png";
import IconDelete from "../../../../public/icons/png/icon-delete.png";
import IconLink from "/public/icons/png/icon-fallback-link.png"
import IconCollapse from "../../../../public/icons/png/icon-collapse-on.png";
import IconExpand from "../../../../public/icons/png/icon-collapse-off.png";

const EditLinksProfile = ({ profile, translations }) => {
  const [activeLinkId, setActiveLinkId] = useState(null);
  const [isNewLink, setIsNewLink] = useState(false);

  const linkForm = useRef(null);

  const { data, setData, post, patch, errors, clearErrors } = useForm({
    link_name: '',
    link_url: '',
  });

  useEffect(() => {
    if (profile?.links?.length > 0 && !activeLinkId && !isNewLink) {
      const firstLink = profile.links[0];
      setActiveLinkId(firstLink.id);
      setData({
        link_name: firstLink.link_name,
        link_url: firstLink.link_url,
      });
    }
  }, [profile, activeLinkId, isNewLink, setData]);

  const [isCollapsed, setIsCollapsed] = useState(profile.is_links_collapsed);

  const toggleCollapse = () => {
    setIsCollapsed(!isCollapsed);
    patch(route('update-is-links-collapsed', { id: profile.id, isLinksCollapsed: !isCollapsed }), {
      onSuccess: () => {
        linkForm.current.scrollIntoView({ behavior: 'smooth' });
      }
    });
  };

  const handleAddNewLink = () => {
    setIsNewLink(true);
    setActiveLinkId(null);
    setData({
      link_name: '',
      link_url: '',
    });
    clearErrors();
  };

  const handleLinkSubmit = (e) => {
    e.preventDefault();

    if (isNewLink) {
      post(route('create-link', { id: profile.id }), {
        onSuccess: () => {
          setIsNewLink(false);
          linkForm.current.scrollIntoView({ behavior: 'smooth' });
        }
      });
    } else if (activeLinkId) {
      post(route('update-link', { id: activeLinkId }), {
        onSuccess: () => {
          linkForm.current.scrollIntoView({ behavior: 'smooth' });
        }
      });
    }
  };

  const handleLinkDelete = () => {
    if (activeLinkId) {
      post(route('delete-link', { id: activeLinkId }), {
        onSuccess: () => {
          setActiveLinkId(null);
          setIsNewLink(false);
          setData({
            link_name: '',
            link_url: '',
          });
          profile.links = profile.links.filter(link => link.id !== activeLinkId);
          linkForm.current.scrollIntoView({ behavior: 'smooth' });
        }
      });
    }
  };

  const handleSelectLink = (link) => {
    setActiveLinkId(link.id);
    setIsNewLink(false);
    setData({
      link_name: link.link_name,
      link_url: link.link_url,
    });
  };

  return (
    <>
      <div className="flex flex-wrap gap-4 p-1">
        {profile?.links.map((link) => {
          const isActive = activeLinkId === link.id && !isNewLink;
          return (
            <div
              key={link.id}
              className={`w-auto rounded-full p-1 cursor-pointer ${isActive ? 'ring-2 ring-primary-bluett' : ''}`}
              onClick={() => handleSelectLink(link)}
            >
              <img
                src={IconLink}
                alt={link.link_name}
                className="w-16 h-16 rounded-full"
              />
            </div>
          );
        })}

        <div className="w-auto rounded-full p-1 cursor-pointer">
          <img
            onClick={handleAddNewLink}
            src={IconAddNewLink}
            alt="Add New Link"
            className="w-16 h-16 rounded-full"
          />
        </div>
      </div>

      {(activeLinkId || isNewLink) && (
        <form ref={linkForm} onSubmit={handleLinkSubmit} className="space-y-3 mt-6">

          <Input
            type="text"
            id="link_name"
            placeholder={"Add title"}
            value={data.link_name}
            onChange={(e) => setData('link_name', e.target.value)}
            color={errors.link_name ? "danger" : ""}
            errorMessage={errors.link_name}
          />

          <Input
            type="url"
            id="link_url"
            placeholder={"Add link"}
            value={data.link_url}
            onChange={(e) => setData('link_url', e.target.value)}
            color={errors.link_url ? "danger" : ""}
            errorMessage={errors.link_url}
            endContent={<img src={IconDelete} alt="Delete" className="size-8 cursor-pointer" onClick={handleLinkDelete}/>}
          />

          <div className="flex justify-end items-end mt-4">
            <div>
              <Button
                type="submit"
                className="bg-transparent text-2xl font-light ps-font-color px-0"
                startContent={<img src={IconSave} alt="Salva" className="size-8"/>}
              >
                Save
              </Button>
            </div>
          </div>
        </form>
      )}

      <div className="flex justify-between mt-4">
        <div>
          <Button
            type="button"
            className="bg-transparent text-base font-medium px-0"
            onClick={toggleCollapse}
            startContent={<img src={isCollapsed ? IconCollapse : IconExpand} alt="Collapse/Expand" className="w-8"/>}
          >
            {translations.be_collapse}
          </Button>
        </div>
      </div>
    </>
  );
};

export default EditLinksProfile;
