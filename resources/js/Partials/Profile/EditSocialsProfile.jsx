import React, { useEffect, useRef, useState } from 'react';
import { Input, Button, Select, SelectItem, Avatar } from "@nextui-org/react";
import { useForm } from "@inertiajs/react";
import IconSave from "../../../../public/icons/png/icon-save.png";
import IconAddNewSocial from "../../../../public/icons/png/icon-add-profile.png";
import IconDelete from "../../../../public/icons/png/icon-delete.png";

const EditSocialsProfile = ({ profile, translations }) => {
  const [activeSocialId, setActiveSocialId] = useState(null);
  const [isNewSocial, setIsNewSocial] = useState(false);
  const [selectedSocial, setSelectedSocial] = useState(new Set());

  const socialForm = useRef(null);

  const { data, setData, post, errors, clearErrors } = useForm({
    social_network_name: '',
    social_network_url: '',
  });

  const socialIcons = {
    behance: "/icons/png/icon-social-behance.png",
    blogger: "/icons/png/icon-social-blogger.png",
    discord: "/icons/png/icon-social-discord.png",
    dribbble: "/icons/png/icon-social-dribbble.png",
    dropbox: "/icons/png/icon-social-dropbox.png",
    facebook: "/icons/png/icon-social-facebook.png",
    google: "/icons/png/icon-social-google.png",
    grinder: "/icons/png/icon-social-grinder.png",
    instagram: "/icons/png/icon-social-instagram.png",
    line: "/icons/png/icon-social-line.png",
    linkedin: "/icons/png/icon-social-linkedin.png",
    messenger: "/icons/png/icon-social-messenger.png",
    pinterest: "/icons/png/icon-social-pinterest.png",
    reddit: "/icons/png/icon-social-reddit.png",
    skype: "/icons/png/icon-social-skype.png",
    snapchat: "/icons/png/icon-social-snapchat.png",
    soundcloud: "/icons/png/icon-social-soundcloud.png",
    spotify: "/icons/png/icon-social-spotify.png",
    telegram: "/icons/png/icon-social-telegram.png",
    tiktok: "/icons/png/icon-social-tiktok.png",
    tinder: "/icons/png/icon-social-tinder.png",
    tumblr: "/icons/png/icon-social-tumblr.png",
    twitch: "/icons/png/icon-social-twitch.png",
    viber: "/icons/png/icon-social-viber.png",
    vimeo: "/icons/png/icon-social-vimeo.png",
    vk: "/icons/png/icon-social-vk.png",
    wechat: "/icons/png/icon-social-wechat.png",
    whatsapp: "/icons/png/icon-social-whatsapp.png",
    x: "/icons/png/icon-social-x.png",
    youtube: "/icons/png/icon-social-youtube.png",
  };

  useEffect(() => {
    if (profile?.social_networks?.length > 0 && !activeSocialId && !isNewSocial) {
      const firstSocial = profile.social_networks[0];
      setActiveSocialId(firstSocial.id);
      setData({
        social_network_name: firstSocial.social_network_name,
        social_network_url: firstSocial.social_network_url,
      });
      setSelectedSocial(new Set([firstSocial.social_network_name])); // Set the initial selected value
    }
  }, [profile, activeSocialId, isNewSocial, setData]);

  useEffect(() => {
    if (data.social_network_name) {
      setSelectedSocial(new Set([data.social_network_name]));
    }
  }, [data.social_network_name]);

  const handleAddNewSocial = () => {
    setIsNewSocial(true);
    setActiveSocialId(null);
    setData({
      social_network_name: '',
      social_network_url: '',
    });
    clearErrors();
    setSelectedSocial(new Set([])); // Clear the selected social
  };

  const handleSocialSubmit = (e) => {
    e.preventDefault();

    if (isNewSocial) {
      post(route('create-social', { id: profile.id }), {
        onSuccess: () => {
          setIsNewSocial(false);
          socialForm.current.scrollIntoView({ behavior: 'smooth' });
        }
      });
    } else if (activeSocialId) {
      post(route('update-social', { id: activeSocialId }), {
        onSuccess: () => {
          socialForm.current.scrollIntoView({ behavior: 'smooth' });
        }
      });
    }
  };

  const handleSocialDelete = () => {
    if (activeSocialId) {
      post(route('delete-social', { id: activeSocialId }), {
        onSuccess: () => {
          setActiveSocialId(null);
          setIsNewSocial(false);
          setData({
            social_network_name: '',
            social_network_url: '',
          });
          profile.social_networks = profile.social_networks.filter(social => social.id !== activeSocialId);
          socialForm.current.scrollIntoView({ behavior: 'smooth' });
        }
      });
    }
  };

  const handleSelectSocial = (social) => {
    setActiveSocialId(social.id);
    setIsNewSocial(false);
    setData({
      social_network_name: social.social_network_name,
      social_network_url: social.social_network_url,
    });
    setSelectedSocial(new Set([social.social_network_name])); // Update the selected value
  };

  const handleSelectChange = (selected) => {
    const selectedValue = Array.from(selected).pop();

    setData(prevData => ({
      ...prevData,
      social_network_name: selectedValue,
      social_network_url: selectedValue === 'whatsapp' ? 'https://wa.me/' : prevData.social_network_url
    }));

    setSelectedSocial(new Set([selectedValue]));
  };

  return (
    <>
      <div className="flex flex-wrap gap-4 p-1">
        {profile?.social_networks.map((social) => {
          const isActive = activeSocialId === social.id && !isNewSocial;
          return (
            <div
              key={social.id}
              className={`w-auto rounded-full p-1 cursor-pointer ${isActive ? 'ring-2 ring-primary-bluett' : ''}`}
              onClick={() => handleSelectSocial(social)}
            >
              <img
                src={socialIcons[social.social_network_name]}
                alt={social.social_network_name}
                className="w-16 h-16 rounded-full"
              />
            </div>
          );
        })}

        <div className="w-auto rounded-full p-1 cursor-pointer">
          <img
            onClick={handleAddNewSocial}
            src={IconAddNewSocial}
            alt="Add New Social"
            className="w-16 h-16 rounded-full"
          />
        </div>
      </div>

      {(activeSocialId || isNewSocial) && (
        <form ref={socialForm} onSubmit={handleSocialSubmit} className="space-y-3 mt-6">
          <Select
            label=""
            aria-labelledby={translations.be_socials}
            placeholder={translations.be_socials}
            labelPlacement="outside"
            selectedKeys={selectedSocial}
            onSelectionChange={handleSelectChange}
            isDisabled={!!activeSocialId}
          >
            {Object.entries(socialIcons).map(([socialName, iconPath]) => (
              <SelectItem
                key={socialName}
                value={socialName}
                startContent={<Avatar alt={socialName} className="w-6 h-6" src={iconPath}/>}
              >
                {socialName.charAt(0).toUpperCase() + socialName.slice(1)}
              </SelectItem>
            ))}
          </Select>

          <Input
            type="url"
            id="social_network_url"
            value={data.social_network_url}
            onChange={(e) => setData('social_network_url', e.target.value)}
            color={errors.social_network_url ? "danger" : ""}
            errorMessage={errors.social_network_url}
            endContent={<img src={IconDelete} alt="Delete" className="size-8 cursor-pointer" onClick={handleSocialDelete}/>}
          />

          <div className="flex justify-end items-end gap-4">
            <Button
              type="submit"
              className="flex justify-end pr-0 bg-transparent text-2xl font-light ps-font-color"
              startContent={<img src={IconSave} alt="Save" className="size-8"/>}
            >
              Save
            </Button>
          </div>
        </form>
      )}
    </>
  );
};

export default EditSocialsProfile;
