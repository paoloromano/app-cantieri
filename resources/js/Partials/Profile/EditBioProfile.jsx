import React, {useRef, useState} from 'react';
import {Input, Button, Textarea} from "@nextui-org/react";
import IconSave from "../../../../public/icons/png/icon-save.png";
import {useForm} from "@inertiajs/react";
import IconCollapse from "../../../../public/icons/png/icon-collapse-on.png";
import IconExpand from "../../../../public/icons/png/icon-collapse-off.png";

const EditBioProfile = ({ profile, translations }) => {
  const isProfileLoaded = profile && profile.profile_name !== undefined;

  const bioForm = useRef(null);

  const { data, setData, patch, errors } = useForm({
    profile_bio: profile ? profile.profile_bio : '',

  });

  const [isCollapsed, setIsCollapsed] = useState(profile.is_bio_collapsed);

  const toggleCollapse = () => {
    setIsCollapsed(!isCollapsed);
    patch(route('update-is-bio-collapsed', { id: profile.id, isBioCollapsed: !isCollapsed }), {
      onSuccess: () => {
        bioForm.current.scrollIntoView({ behavior: 'smooth' });
      }
    });
  };

  const handleBioSubmit = (e) => {
    e.preventDefault();
    patch(route('update-bio-profile', { id: profile.id }), {
      onSuccess: () => {
        bioForm.current.scrollIntoView({ behavior: 'smooth' });
      }
    });
  };

  React.useEffect(() => {
    if (isProfileLoaded) {
      setData({
        profile_bio: profile.profile_bio || '',
      });
    }
  }, [profile]);

  return (
    <form ref={bioForm} onSubmit={handleBioSubmit} className="space-y-3">

      <Textarea
        minRows={6}
        description={translations.be_bio_max_char_label}
        className=""
        value={data.profile_bio}
        onChange={(e) => setData({...data, profile_bio: e.target.value})}
        color={errors.profile_bio ? "danger" : ""}
        errorMessage={errors.profile_bio}
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

export default EditBioProfile;
