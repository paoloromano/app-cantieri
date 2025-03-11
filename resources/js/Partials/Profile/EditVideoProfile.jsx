import React, {useRef, useState} from 'react';
import { Input, Button } from "@nextui-org/react";
import IconSave from "../../../../public/icons/png/icon-save.png";
import IconDelete from "../../../../public/icons/png/icon-delete.png";
import {useForm} from "@inertiajs/react";
import IconCollapse from "../../../../public/icons/png/icon-collapse-on.png";
import IconExpand from "../../../../public/icons/png/icon-collapse-off.png";

const EditVideoProfile = ({ profile, translations }) => {
  const isProfileLoaded = profile && profile.profile_name !== undefined;

  const videoForm = useRef(null);

  const { data, setData, patch, errors } = useForm({
    profile_video: profile && profile.profile_video ? profile.profile_video : '',
  });

  const [isCollapsed, setIsCollapsed] = useState(profile.is_videos_collapsed);

  const toggleCollapse = () => {
    setIsCollapsed(!isCollapsed);
    patch(route('update-is-videos-collapsed', { id: profile.id, isVideosCollapsed: !isCollapsed }), {
      onSuccess: () => {
        videoForm.current.scrollIntoView({ behavior: 'smooth' });
      }
    });
  };

  const handleVideoSubmit = (e) => {
    e.preventDefault();
    patch(route('update-video-profile', { id: profile.id }), {
      onSuccess: () => {
        videoForm.current.scrollIntoView({ behavior: 'smooth' });
      }
    });
  };

  const clearVideoInput = () => {
    setData({ ...data, profile_video: '' });
  };


  React.useEffect(() => {
    if (isProfileLoaded) {
      setData({
        profile_video: profile.profile_video || '',
      });
    }
  }, [profile]);

  return (
    <form ref={videoForm} onSubmit={handleVideoSubmit} className="space-y-3">

      <Input
        type="url"
        id="profile_video"
        value={data.profile_video}
        onChange={(e) => setData({...data, profile_video: e.target.value})}
        color={errors.profile_video ? "danger" : ""}
        errorMessage={errors.profile_video}
        endContent={<img onClick={clearVideoInput} src={IconDelete} alt="Salva" className="size-8"/>}
        description={translations.be_link_video}

      />

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
  );
};

export default EditVideoProfile;
