import React, { useCallback, useState } from 'react';
import { ProfileSingleImageModal } from "@/Partials/Cards/ProfileSingleImageModal.jsx";
import {CardsQrCodeModalFE} from "@/Partials/Cards/CardsQrCodeModalFE.jsx";

const ImagesProfileFE = ({ profile, themeColor, profileButtonColor, profileLinkColor }) => {

  const [modals, setModals] = useState({
    imageModal: { isOpen: false, image: null },
  });

  const openImageModal = useCallback((image) => {
    setModals((prevModals) => ({
      ...prevModals,
      imageModal: { isOpen: true, image },
    }));
  }, []);

  const closeModal = useCallback((modalName) => {
    setModals((prevModals) => ({
      ...prevModals,
      [modalName]: { isOpen: false, image: null },
    }));
  }, []);

  const showImageModal = (image) => {
    openImageModal(image);
  }

  return (
    <>
      <div className="flex flex-wrap gap-1">
        {profile.images.map((image) => {
          const image_url = image.image_path;
          return (
            <div key={image.id} className="relative w-28 h-28 p-1 overflow-hidden">
              <img
                src={image_url}
                onClick={() => showImageModal(image)}
                alt={image.image_name}
                className="w-full h-full object-cover"
              />
            </div>
          );
        })}
      </div>

      <ProfileSingleImageModal
        image={modals.imageModal.image}
        onClose={() => closeModal('imageModal')}
        themeColor = {themeColor}
        profileButtonColor = {profileButtonColor}
      />

    </>
  );
};

export default ImagesProfileFE;
