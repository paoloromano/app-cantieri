import { Button, Modal, ModalBody, ModalContent, ModalFooter, ModalHeader } from "@heroui/react";
import { router } from "@inertiajs/react";

export const UsersDeleteModal = ({ user, onClose }) => {
  const deleteUser = () => {
    router.delete(route("users.destroy", user.id));
    onClose();
  };

  return (
    <Modal isOpen={user} onClose={onClose}>
      <ModalContent>
        <ModalHeader>Elimina utente</ModalHeader>
        <ModalBody>Sei sicuro di voler eliminare {user?.name}?</ModalBody>
        <ModalFooter>
          <Button color="primary" variant="bordered" onPress={onClose}>
            Annulla
          </Button>
          <Button color="danger" onPress={deleteUser}>
            Elimina
          </Button>
        </ModalFooter>
      </ModalContent>
    </Modal>
  );
};
