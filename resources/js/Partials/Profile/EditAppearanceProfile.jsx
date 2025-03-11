import React, {useState} from 'react';
import {Input, Button, Radio, RadioGroup} from "@nextui-org/react";
import IconSave from "../../../../public/icons/png/icon-save.png";
import {useForm} from "@inertiajs/react";

import IconLightMode from "../../../../public/icons/png/icon-light-mode.png";
import IconDarkMode from "../../../../public/icons/png/icon-dark-mode.png";
import IconBalloonTheme from "/public/icons/png/icon-balloon-mode.png";
import IconHeroTheme from "/public/icons/png/icon-hero-mode.png";


const EditAppearanceProfile = ({ profile, translations }) => {

  const isProfileLoaded = profile && profile.profile_name !== undefined;

  const { data, setData, patch, errors } = useForm({
    profile_link_color: profile ? profile.profile_link_color : '#FFFFFF',
    profile_button_color: profile ? profile.profile_button_color : '#26ACBE',
    profile_theme_color: profile ? profile.profile_theme_color : 'light',
    profile_theme_type: profile ? profile.profile_theme_type : 'balloon',
  });

  React.useEffect(() => {
    if (isProfileLoaded) {
      setData({
        profile_link_color: profile.profile_link_color || '#FFFFFF',
        profile_button_color: profile.profile_button_color || '#26ACBE',
        profile_theme_color: profile.profile_theme_color || 'light',
        profile_theme_type: profile.profile_theme_type || 'balloon',
      });
    }
  }, [profile]);

  const handleSubmitAppearanceProfile = (e) => {
    e.preventDefault();
    patch(route('update-appearance-profile', { id: profile.id }), {
      onSuccess: () => {
      }
    });
  };

  return (
    <form onSubmit={handleSubmitAppearanceProfile} className="space-y-3">

      <div>
        <label htmlFor="profile_link_color" className="text-lg font-medium">{translations.be_link_color}</label>
        <div className="flex items-center mt-1">
          <div className={`w-20 md:w-16 xl:w-16 lg:w-16 h-16 rounded-full mr-4 border-1`}
               style={{backgroundColor: data.profile_link_color || '#FFFFFF'}}></div>
          <Input
            type="text"
            id="profile_link_color"
            value={data.profile_link_color}
            onChange={(e) => setData({...data, profile_link_color: e.target.value})}
            color={errors.profile_link_color ? "danger" : ""}
            errorMessage={errors.profile_link_color}
          />
        </div>
      </div>

      <div>
        <label htmlFor="profile_button_color" className="text-lg font-medium">{translations.be_button_color}</label>
        <div className="flex items-center mt-1">
          <div className={`w-20 md:w-16 xl:w-16 lg:w-16 h-16 rounded-full mr-4 border-1`}
               style={{backgroundColor: data.profile_button_color || '#26ACBE'}}></div>
          <Input
            type="text"
            id="profile_button_color"
            value={data.profile_button_color}
            onChange={(e) => setData({...data, profile_button_color: e.target.value})}
            color={errors.profile_button_color ? "danger" : ""}
            errorMessage={errors.profile_button_color}
          />
        </div>
      </div>

      <div className="flex justify-between">

        <RadioGroup
          orientation="horizontal"
          value={data.profile_theme_color}
          onChange={(e) => setData({...data, profile_theme_color: e.target.value})}
          className="mt-6 space-y-4"
        >

          <div className="flex-1 text-center">
            <img src={IconLightMode} alt="Light Theme" className="w-2/3 mx-auto mb-2"/>
            <div className="flex items-center justify-center">
              <div className="flex flex-col items-center">
                <span className="mb-1">Light</span>
                <Radio value="light" className="ps-radio mb-1"/>
              </div>
            </div>
          </div>

          <div className="flex-1 text-center">
            <img src={IconDarkMode} alt="Dark Theme" className="w-2/3 mx-auto mb-2"/>
            <div className="flex items-center justify-center">
              <div className="flex flex-col items-center">
                <span className="mb-1">Dark</span>
                <Radio value="dark" className="ps-radio mb-1"/>
              </div>
            </div>
          </div>
        </RadioGroup>
      </div>


      <div className="flex justify-between">

        <RadioGroup
          orientation="horizontal"
          value={data.profile_theme_type}
          onChange={(e) => setData({...data, profile_theme_type: e.target.value})}
          className="mt-6 space-y-4"
        >

          <div className="flex-1 text-center">
            <img src={IconBalloonTheme} alt="Balloon Theme" className="w-2/3 mx-auto mb-2"/>
            <div className="flex items-center justify-center">
              <div className="flex flex-col items-center">
                <span className="mb-1">Balloon</span>
                <Radio value="balloon" className="ps-radio mb-1"/>
              </div>
            </div>
          </div>

          <div className="flex-1 text-center">
            <img src={IconHeroTheme} alt="Hero Theme" className="w-2/3 mx-auto mb-2"/>
            <div className="flex items-center justify-center">
              <div className="flex flex-col items-center">
                <span className="mb-1">Hero</span>
                <Radio value="hero" className="ps-radio mb-1"/>
              </div>
            </div>
          </div>

        </RadioGroup>

      </div>

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

export default EditAppearanceProfile;
