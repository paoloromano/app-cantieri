import React, {useState} from 'react';
import { Input, Button } from "@nextui-org/react";
import IconSave from "../../../../public/icons/png/icon-save.png";
import {useForm} from "@inertiajs/react";

const EditBasicallyInfoProfile = ({ profile, translations }) => {
  const isProfileLoaded = profile && profile.profile_name !== undefined;

  const { data, setData, patch, errors } = useForm({
    title: profile ? profile.profile_title : '',
    name: profile ? profile.profile_name : '',
    lastname: profile ? profile.profile_lastname : '',
    role: profile ? profile.profile_role : '',
  });

  const handleSubmit = (e) => {
    e.preventDefault();
    patch(route('update-basically-info-profile', { id: profile.id }), {
      onSuccess: () => {
      }
    });
  };

  React.useEffect(() => {
    if (isProfileLoaded) {
      setData({
        title: profile.profile_title || '',
        name: profile.profile_name || '',
        lastname: profile.profile_lastname || '',
        role: profile.profile_role || '',
      });
    }
  }, [profile]);

  return (
    <form onSubmit={handleSubmit} className="space-y-3">

      <label htmlFor="title" className="text-[16px] font-medium">{translations.be_title}</label>
      <Input
        type="text"
        id="title"
        placeholder={"Es. Ing."}
        value={data.title}
        onChange={(e) => setData({...data, title: e.target.value})}
        color={errors.title ? "danger" : ""}
        errorMessage={errors.title}
      />

      <label htmlFor="name" className="text-[16px] font-medium">{translations.be_name}</label>
      <Input
        type="text"
        id="name"
        value={data.name}
        onChange={(e) => setData({...data, name: e.target.value})}
        color={errors.name ? "danger" : ""}
        errorMessage={errors.name}
      />

      <label htmlFor="lastname" className="text-[16px] font-medium">{translations.be_lastname}</label>
      <Input
        type="text"
        id="lastname"
        value={data.lastname}
        onChange={(e) => setData({...data, lastname: e.target.value})}
        color={errors.lastname ? "danger" : ""}
        errorMessage={errors.lastname}
      />

      <label htmlFor="role" className="text-[16px] font-medium">{translations.be_role}</label>
      <Input
        type="text"
        id="role"
        value={data.role}
        onChange={(e) => setData({...data, role: e.target.value})}
        color={errors.role ? "danger" : ""}
        errorMessage={errors.role}
      />

      <div className="flex justify-end items-end gap-4">
        <Button
          type="submit"
          className="flex justify-end pr-0 bg-transparent text-2xl font-light ps-font-color"
          startContent={<img src={IconSave} alt="Salva" className="size-8"/>}
        >
          Save
        </Button>
      </div>
    </form>
  );
};

export default EditBasicallyInfoProfile;
