import { Button, Modal, ModalBody, ModalContent, ModalFooter, ModalHeader } from "@heroui/react";
import { router } from "@inertiajs/react";
import { useState, useEffect } from 'react';

export const DipendenteDeleteModal = ({ dipendenti, onClose }) => {
  const [dipendentiIds, setDipendentiIds] = useState([]);

  useEffect(() => {
    if (dipendenti === "all") {
      const dipendentiIds = 'all';
      setDipendentiIds(dipendentiIds);
    } else if (Array.isArray(dipendenti)) {
      const dipendentiIds = dipendenti.map(cantiere => cantiere.id);
      setDipendentiIds(dipendentiIds);
    }
  }, [dipendenti]);

  const deleteDipendenti = () => {

    router.post(route("dipendenti.destroy"), { dipendenti_ids: dipendentiIds }, {
      onSuccess: () => {
        onClose();
      }
    });
  };

  return (
    <Modal
      isOpen={dipendenti && (Array.isArray(dipendenti) ? dipendenti.length > 0 : dipendenti === "all")}
      onClose={onClose}
      className="items-center justify-center"
    >
      <ModalContent>
        <ModalHeader>Elimina dipendente</ModalHeader>
        <ModalBody>
          Sei sicuro di voler eliminare {dipendenti && dipendenti.length === 1 ? `il dipendente ${dipendenti[0].nome}` : `i dipendenti selezionati`}?
        </ModalBody>
        <ModalFooter>
          <Button color="primary" variant="bordered" onPress={onClose}>
            Annulla
          </Button>
          <Button color="danger" onPress={deleteDipendenti}>
            Elimina
          </Button>
        </ModalFooter>
      </ModalContent>
    </Modal>
  );
};
