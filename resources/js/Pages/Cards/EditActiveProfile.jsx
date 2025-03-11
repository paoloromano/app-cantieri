import React, { useState } from "react";
import { Link, router } from "@inertiajs/react";
import AuthenticatedCardRoleLayout from "@/Layouts/AuthenticatedCardRoleLayout.jsx";
import iconBack from "../../../../public/icons/png/icon-back.png";
import iconAddNewProfile from "../../../../public/icons/png/icon-add-profile.png";
import { Button, RadioGroup, Radio } from "@nextui-org/react";
import IconSave from "../../../../public/icons/png/icon-save.png";
import IconDuplicate from "../../../../public/icons/png/icon-duplciate-profile.png"

export default function EditActiveProfile({ card }) {
  const [selectedProfileId, setSelectedProfileId] = useState(
    card.profiles.find(profile => profile.active === 1)?.id || null
  );
  const [profiles, setProfiles] = useState(card.profiles);

  const handleSave = () => {
    router.post(route('update-active-profile', { id: card.id }), { profile_id: selectedProfileId });
  };

  const handleAddNewProfile = () => {
    router.post(route('create-profile', { id: card.id }), {}, {
      onSuccess: (page) => {
        const newId = page.props.profile_id;
        if (newId) {
          setProfiles(prevProfiles => [...prevProfiles, { id: newId, active: 0 }]);
          setSelectedProfileId(newId);
        }
      }
    });
  };

  const handleDuplicateProfile = (profile_id) => {
    router.post(route("duplicate-profile", { id: profile_id }), {}, {
      onSuccess: (page) => {
        console.log('Profilo Duplicato');
      },
    });
  };

  return (
    <>
      <div className=" mx-auto p-6">
        <div className="flex items-center space-x-4 mb-6">
          <Link className={"min-w-9"} href={route('cards.edit', {id: card.id})}>
            <img
              src={iconBack}
              alt="Back"
              className="w-10 h-10 rounded-full cursor-pointer"
            />
          </Link>
          <div>
            <p className="text-2xl font-light">{card.translations.be_profiles_management}</p>
          </div>
        </div>

        <p className="text-base font-light">
          {card.translations.be_profiles_management_desc}
        </p>

        <RadioGroup
          value={selectedProfileId}
          onValueChange={setSelectedProfileId}
          className="mt-6 space-y-4"
        >
          {profiles.map(profile => {
            const profileCoverImage = () => {
              if (profile.profile_theme_type === 'hero' && profile.profile_img_cover_hero !== '/storage/') {
                return profile.profile_img_cover_hero;
              } else if (profile.profile_theme_type === 'balloon' && profile.profile_img_cover_balloon !== '/storage/') {
                return profile.profile_img_cover_balloon;
              } else {
                return "https://via.placeholder.com/150";
              }
            };

            return (
              <div key={profile.id} className="flex items-center space-x-4">
                <div className="relative w-16 h-16 rounded-full overflow-hidden">
                  <img
                    src={profileCoverImage()}
                    alt={`${profile.profile_name} ${profile.profile_lastname}`}
                    className="w-full h-full object-cover"
                  />
                </div>
                <div className="flex-1">
                  <p className="text-base font-medium">{profile.profile_name} {profile.profile_lastname}</p>
                  <p className="text-base font-light">{profile.profile_company_name}</p>
                </div>
                <div className="relative w-9 h-9 rounded-full overflow-hidden">
                  <img
                    onClick={(e) => {
                      e.stopPropagation();
                      handleDuplicateProfile(profile.id);
                    }}
                    src={IconDuplicate}
                    alt="Duplica profilo"
                    className="w-9 h-9 cursor-pointer"
                  />
                </div>
                <div className="ml-auto">
                  <Radio value={profile.id}/>
                </div>
              </div>
            );
          })}
        </RadioGroup>

        <div className="mt-6 space-y-4 cursor-pointer">
          <div className="flex items-center space-x-4">
            <img
              onClick={handleAddNewProfile}
              src={iconAddNewProfile}
              alt="Add New Profile"
              className="w-16 h-16 rounded-full"
            />
          </div>
        </div>

        <div className="flex justify-end items-end gap-4">
          <Button
            onPress={handleSave}
            className="flex justify-end pr-0 bg-transparent text-2xl font-light ps-font-color"
            startContent={<img src={IconSave} alt="Salva" className="size-8"/>}
          >
            Save
          </Button>
        </div>

      </div>
    </>
  );
}

EditActiveProfile.layout = (page) => <AuthenticatedCardRoleLayout children={page} card={page.props.card} title={"Modifica Card"}/>;
