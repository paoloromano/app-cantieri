import { Button, Modal, ModalBody, ModalContent, ModalFooter, ModalHeader } from "@nextui-org/react";
import { router } from "@inertiajs/react";
import axios from 'axios';
import { useState, useEffect } from 'react';

export const CardsDeleteModal = ({ cards, onClose }) => {
  const [cardIds, setCardIds] = useState([]);

  useEffect(() => {
    if (cards === "all") {
      const cardIds = 'all';
      setCardIds(cardIds);
    } else if (Array.isArray(cards)) {
      const cardIds = cards.map(card => card.id);
      setCardIds(cardIds);
    }
  }, [cards]);

  const deleteCards = () => {
    router.post(route("cards.destroy"), { card_ids: cardIds }, {
      onSuccess: () => {
        onClose();
      }
    });
  };

  return (
    <Modal
      isOpen={cards && (Array.isArray(cards) ? cards.length > 0 : cards === "all")}
      onClose={onClose}
      className="items-center justify-center"
    >
      <ModalContent>
        <ModalHeader>Elimina card</ModalHeader>
        <ModalBody>
          Sei sicuro di voler eliminare {cards.length === 1 ? `la card ${cards[0].slug}` : `le cards selezionate`}?
        </ModalBody>
        <ModalFooter>
          <Button color="primary" variant="bordered" onPress={onClose}>
            Annulla
          </Button>
          <Button color="danger" onPress={deleteCards}>
            Elimina
          </Button>
        </ModalFooter>
      </ModalContent>
    </Modal>
  );
};
