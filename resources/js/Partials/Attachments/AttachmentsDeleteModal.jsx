import {Button, Modal, ModalBody, ModalContent, ModalFooter, ModalHeader} from "@nextui-org/react";
import {router} from "@inertiajs/react";

export const AttachmentsDeleteModal = ({attachment, onClose}) => {
  const deleteAttachment = () => {
    router.delete(route("attachments.destroy", attachment['uuid']));
    onClose();
  };

  return (
    <Modal isOpen={attachment} onClose={onClose}>
      <ModalContent>
        <ModalHeader>Elimina allegato</ModalHeader>
        <ModalBody>Sei sicuro di voler eliminare {attachment?.name}?</ModalBody>
        <ModalFooter>
          <Button color="primary" variant="bordered" onPress={onClose}>
            Annulla
          </Button>
          <Button color="danger" onPress={deleteAttachment}>
            Elimina
          </Button>
        </ModalFooter>
      </ModalContent>
    </Modal>
  );
};
