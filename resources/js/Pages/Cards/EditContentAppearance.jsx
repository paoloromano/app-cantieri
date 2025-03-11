import React, { useState, useEffect, useCallback } from "react";
import { Head, Link, router, usePage } from "@inertiajs/react";
import AuthenticatedCardRoleLayout from "@/Layouts/AuthenticatedCardRoleLayout.jsx";
import { Button, Spacer } from "@nextui-org/react";
import IconBack from "../../../../public/icons/png/icon-back.png";
import EditProfileAccordion from "@/Partials/Profile/EditProfileAccordion.jsx";
import IconAddNewProfile from "../../../../public/icons/png/icon-add-profile.png";
import IconDelete from "../../../../public/icons/png/icon-delete.png";
import IconDuplicate from "../../../../public/icons/png/icon-duplciate-profile.png"
import { ProfileDeleteModal } from "@/Partials/Profile/ProfileDeleteModal.jsx";

export default function EditContentAppearance({ card }) {
  const { profile_id: initialProfileId } = usePage().props;
  const [activeProfileId, setActiveProfileId] = useState(null);
  const [modals, setModals] = useState({ deleteModal: false });

  const translations = card.translations;

  const openModal = useCallback((modalName) => {
    setModals((prevModals) => ({ ...prevModals, [modalName]: true }));
  }, []);

  const closeModal = useCallback((modalName) => {
    setModals((prevModals) => ({ ...prevModals, [modalName]: false }));
  }, []);

  useEffect(() => {
    if (initialProfileId) {
      setActiveProfileId(initialProfileId);
    } else {
      const activeProfile = card.profiles.find((profile) => profile.active === 1);
      if (activeProfile) {
        setActiveProfileId(activeProfile.id);
      } else if (card.profiles.length > 0) {
        setActiveProfileId(card.profiles[0].id);
      }
    }
  }, [initialProfileId, card.profiles]);

  const handleProfileClick = (id) => {
    setActiveProfileId(id);
  };

  const handleAddNewProfile = () => {
    router.post(route("create-profile", { id: card.id }), {}, {
      onSuccess: (page) => {
        const newId = page.props.profile_id;
        if (newId) {
          setActiveProfileId(newId);
        }
      },
    });
  };

  const handleDuplicateProfile = (profile_id) => {
    router.post(route("duplicate-profile", { id: profile_id }), {}, {
      onSuccess: (page) => {
        console.log('Profilo Duplicato');
      },
    });
  };

  const handleDeleteProfile = () => {
    openModal('deleteModal');
  };

  const confirmDeleteProfile = () => {
    if (activeProfileId) {
      router.post(route("delete-profile", { id: activeProfileId }), {}, {
        onSuccess: (page) => {
          const activeProfile = card.profiles.find((profile) => profile.active === 1);
          setActiveProfileId(activeProfile ? activeProfile.id : null);
          closeModal('deleteModal');
        },
      });
    }
  };

  return (
    <>

      <div className="mx-auto p-6">
        <div className="flex items-center space-x-4 mb-6">
          <Link className={"min-w-9"} href={route("cards.edit", { id: card.id })}>
            <img src={IconBack} alt="Back" className="w-10 h-10 rounded-full cursor-pointer" />
          </Link>
          <div>
            <p className="text-2xl font-light">{translations.be_content_and_appearance}</p>
          </div>
        </div>

        <p className="text-base font-light">{translations.be_customize_profiles}</p>

        <Spacer y={4} />

        <div className="flex flex-wrap gap-4">
          {card.profiles.map((profile) => {
            const isActive = activeProfileId == profile.id;

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
              <>
                <div
                  key={profile.id}
                  className={`relative w-auto rounded-full p-1 cursor-pointer `}
                  onClick={() => handleProfileClick(profile.id)}
                >
                  <div className={`w-16 h-16 rounded-full overflow-hidden ${isActive ? "ring-2 ring-primary-bluett" : ""} z-10`}>
                    <img
                      src={profileCoverImage()}
                      alt={profile.profile_name}
                      className="w-full h-full object-cover p-0.5 rounded-full"
                    />

                  </div>

                  <div className="inset-0 flex items-center justify-center -mt-4">
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

                </div>


              </>
            );
          })}

          <div className="w-auto rounded-full p-1 cursor-pointer">
            <img
              onClick={handleAddNewProfile}
              src={IconAddNewProfile}
              alt="Add New Profile"
              className="w-16 h-16 rounded-full"
            />
          </div>
        </div>

        <Spacer y={4}/>

        {activeProfileId && (
          <EditProfileAccordion card={card} profile_id={activeProfileId} />
        )}

        <ProfileDeleteModal
          isOpen={modals.deleteModal}
          onClose={() => closeModal('deleteModal')}
          onConfirm={confirmDeleteProfile}
          translations={translations}
        />

        <Spacer y={8} />

        <div className="flex justify-between items-end gap-4">
          <Button
            onPress={handleDeleteProfile}
            className="flex justify-end pr-0 bg-transparent text-2xl font-light ps-font-color"
            startContent={<img src={IconDelete} alt={translations.be_delete_profile} className="size-8" />}
          >
            {translations.be_delete_profile}
          </Button>
        </div>
      </div>
    </>
  );
}

EditContentAppearance.layout = (page) => (
  <AuthenticatedCardRoleLayout children={page} card={page.props.card} title={"Modifica Card"} />
);
