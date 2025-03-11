import {Modal, ModalBody, ModalContent, Spacer} from "@nextui-org/react";

export const ProfileSingleImageModal = ({ image, onClose, themeColor, profileButtonColor }) => {

  const IconClose = () => (
    <svg xmlns="http://www.w3.org/2000/svg" width="16.655" height="16.655" viewBox="0 0 16.655 16.655">
      <path id="Tracciato_1058" data-name="Tracciato 1058"
            d="M14.989,0,8.327,6.663,1.665,0,0,1.665,6.662,8.327,0,14.989l1.665,1.665L8.327,9.994l6.662,6.661,1.665-1.665L9.993,8.327l6.662-6.662Z"
            transform="translate(0 0)" fill={"white"}/>
    </svg>
  );

  return (
    <Modal
      size="full"
      isOpen={Boolean(image)}
      onClose={onClose}
      hideCloseButton ={true}
      className={`flex items-center justify-center fixed ${
        themeColor === 'light' ? 'bg-white bg-opacity-94' : 'bg-black bg-opacity-50'
      } text-4xl`}
    >
      <ModalContent className="relative w-full h-full flex items-center justify-center">

        <button
          onClick={onClose}
          className="absolute top-4 right-4 w-10 h-10 flex items-center justify-center rounded-full"
          style={{backgroundColor: profileButtonColor}}
        >
          <IconClose className="text-white"/>
        </button>

        <ModalBody className="flex items-center justify-center w-full h-full">
          {image && (<img src={image.image_path} alt={image.image_name} className=""/>)}
          <Spacer y="4"/>
        </ModalBody>
      </ModalContent>
    </Modal>
  );
};
