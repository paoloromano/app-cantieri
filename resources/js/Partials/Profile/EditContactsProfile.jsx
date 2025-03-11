import React, {useRef, useState} from 'react';
import { Input, Button } from "@nextui-org/react";
import IconSave from "../../../../public/icons/png/icon-save.png";
import IconPhone from "../../../../public/icons/png/icon-phone.png";
import IconMobilePhone from "../../../../public/icons/png/icon-mobile.png";
import IconEmail from "../../../../public/icons/png/icon-email.png";
import IconWebsite from "../../../../public/icons/png/icon-web.png";
import {useForm} from "@inertiajs/react";
import IconCollapse from "../../../../public/icons/png/icon-collapse-on.png";
import IconExpand from "../../../../public/icons/png/icon-collapse-off.png";

const EditContactsProfile = ({ profile, translations }) => {
  const isProfileLoaded = profile && profile.profile_name !== undefined;

  const contactsForm = useRef(null);

  const { data, setData, patch, errors } = useForm({
    profile_phone: profile ? profile.profile_phone : '',
    profile_mobile_phone: profile ? profile.profile_mobile_phone : '',
    profile_email: profile ? profile.profile_email : '',
    profile_website: profile ? profile.profile_website : '',
  });

  const [isCollapsed, setIsCollapsed] = useState(profile.is_contacts_collapsed);

  const toggleCollapse = () => {
    setIsCollapsed(!isCollapsed);
    patch(route('update-is-contacts-collapsed', { id: profile.id, isContactsCollapsed: !isCollapsed }), {
      onSuccess: () => {
        contactsForm.current.scrollIntoView({ behavior: 'smooth' });
      }
    });
  };

  const handleContactsSubmit = (e) => {
    e.preventDefault();
    patch(route('update-contacts-profile', { id: profile.id }), {
      onSuccess: () => {
        contactsForm.current.scrollIntoView({ behavior: 'smooth' });
      }
    });
  };

  React.useEffect(() => {
    if (isProfileLoaded) {
      setData({
        profile_phone: profile.profile_phone || '',
        profile_mobile_phone: profile.profile_mobile_phone || '',
        profile_email: profile.profile_email || '',
        profile_website: profile.profile_website || '',
      });
    }
  }, [profile]);

  return (
    <form ref={contactsForm} onSubmit={handleContactsSubmit} className="space-y-3">

      <Input
        type="text"
        id="profile_phone"
        value={data.profile_phone}
        onChange={(e) => setData({...data, profile_phone: e.target.value})}
        color={errors.profile_phone ? "danger" : ""}
        errorMessage={errors.profile_phone}
        startContent={<img src={IconPhone} alt="Salva" className="size-8"/>}
      />

      <Input
        type="text"
        id="profile_mobile_phone"
        value={data.profile_mobile_phone}
        onChange={(e) => setData({...data, profile_mobile_phone: e.target.value})}
        color={errors.profile_mobile_phone ? "danger" : ""}
        errorMessage={errors.profile_mobile_phone}
        startContent={<img src={IconMobilePhone} alt="Salva" className="size-8"/>}
      />

      <Input
        type="text"
        id="profile_email"
        value={data.profile_email}
        onChange={(e) => setData({...data, profile_email: e.target.value})}
        color={errors.profile_email ? "danger" : ""}
        errorMessage={errors.profile_email}
        startContent={<img src={IconEmail} alt="Salva" className="size-8"/>}
      />

      <Input
        type="text"
        id="profile_website"
        value={data.profile_website}
        onChange={(e) => setData({...data, profile_website: e.target.value})}
        color={errors.profile_website ? "danger" : ""}
        errorMessage={errors.profile_website}
        startContent={<img src={IconWebsite} alt="Salva" className="size-8"/>}
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

export default EditContactsProfile;
