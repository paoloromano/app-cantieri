import {Button, Input, Modal, ModalBody, ModalContent, ModalFooter, ModalHeader} from "@nextui-org/react";
import {router} from "@inertiajs/react";
import {useEffect, useState} from "react";

export const AttachmentsEditModal = ({attachment, onClose}) => {
  const [name, setName] = useState();

  useEffect(() => {
    setName(attachment['name']);
  }, [attachment]);


  const editAttachment = () => {
    router.put(route("attachments.update", attachment['uuid']), {name});
    onClose();
  };

  return (
    <Modal isOpen={attachment} onClose={onClose}>
      <ModalContent>
        <ModalHeader>Modifica nome allegato</ModalHeader>
        <ModalBody>
          <Input label="Nome" value={name} onChange={(e) => setName(e.target.value)}/>
        </ModalBody>
        <ModalFooter>
          <Button color="primary" variant="bordered" onPress={onClose}>
            Annulla
          </Button>
          <Button color="primary" onPress={editAttachment}>
            Modifica
          </Button>
        </ModalFooter>
      </ModalContent>
    </Modal>
  );
};
