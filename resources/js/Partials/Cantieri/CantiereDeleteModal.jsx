import { Button, Modal, ModalBody, ModalContent, ModalFooter, ModalHeader } from "@nextui-org/react";
import { router } from "@inertiajs/react";
import axios from 'axios';
import { useState, useEffect } from 'react';

export const CantiereDeleteModal = ({ cantieri, onClose }) => {
  const [cantieriIds, setCantieriIds] = useState([]);

  useEffect(() => {
    if (cantieri === "all") {
      const cantieriIds = 'all';
      setCantieriIds(cantieriIds);
    } else if (Array.isArray(cantieri)) {
      const cantieriIds = cantieri.map(cantiere => cantiere.id);
      setCantieriIds(cantieriIds);
    }
  }, [cantieri]);

  const deleteCantieri = () => {
    router.post(route("cantieri.destroy"), { cantieri_ids: cantieriIds }, {
      onSuccess: () => {
        onClose();
      }
    });
  };

  return (
    <Modal
      isOpen={cantieri && (Array.isArray(cantieri) ? cantieri.length > 0 : cantieri === "all")}
      onClose={onClose}
      className="items-center justify-center"
    >
      <ModalContent>
        <ModalHeader>Elimina cantiere</ModalHeader>
        <ModalBody>
          Sei sicuro di voler eliminare {cantieri.length === 1 ? `il cantiere ${cantieri[0].nome}` : `i cantieri selezionati`}?
        </ModalBody>
        <ModalFooter>
          <Button color="primary" variant="bordered" onPress={onClose}>
            Annulla
          </Button>
          <Button color="danger" onPress={deleteCantieri}>
            Elimina
          </Button>
        </ModalFooter>
      </ModalContent>
    </Modal>
  );
};
