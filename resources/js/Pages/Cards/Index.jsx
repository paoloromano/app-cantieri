import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.jsx";
import {useCallback, useState} from "react";
import {CardsTable} from "@/Partials/Cards/CardsTable.jsx";
import {CardsTableHeader} from "@/Partials/Cards/CardsTableHeader.jsx";
import {CardsDeleteModal} from "@/Partials/Cards/CardsDeleteModal.jsx";
import {QueryProvider} from "@/Context/QueryContext.jsx";
import {CardsQrCodeModal} from "@/Partials/Cards/CardsQrCodeModal.jsx";

export default function Index({cards, baseUrl, session_rows_per_page}) {

  const [selectedCards, setSelectedCards] = useState(new Set([]));

  const [modals, setModals] = useState({
    deleteModal: { isOpen: false, cards: [] },
    qrCodeModal: { isOpen: false, card: null },
  });

  const openDeleteModal = useCallback((cards) => {
    setModals((prevModals) => ({
      ...prevModals,
      deleteModal: { isOpen: true, cards },
    }));
  }, []);

  const openQrCodeModal = useCallback((card) => {
    setModals((prevModals) => ({
      ...prevModals,
      qrCodeModal: { isOpen: true, card },
    }));
  }, []);

  const closeModal = useCallback((modalName) => {
    setModals((prevModals) => ({
      ...prevModals,
      [modalName]: { isOpen: false, cards: [], card: null },
    }));
  }, []);

  const showDeleteModal = (card) => {
    const cardsToDelete = card ? [card] : Array.from(selectedCards).map(id => ({ id }));
    openDeleteModal(cardsToDelete);
  };

  const showQrCodeModal = (card) => {
    openQrCodeModal(card);
  }

  return (
    <>
      <QueryProvider>
        <h1 className="mb-0">Card Management Hub</h1>
        <CardsTableHeader
          selectedCards={selectedCards}
          showDeleteModal={showDeleteModal}
        />

        <CardsTable
          selectedCards={selectedCards}
          setSelectedCards={setSelectedCards}
          showDeleteModal={showDeleteModal}
          showQrCodeModal={showQrCodeModal}
        />

        <CardsDeleteModal
          cards={modals.deleteModal.cards}
          onClose={() => closeModal('deleteModal')}
        />

        <CardsQrCodeModal
          card={modals.qrCodeModal.card}
          onClose={() => closeModal('qrCodeModal')}
          baseUrl = {baseUrl}
        />

      </QueryProvider>
    </>
  );
}

Index.layout = (page) => <AuthenticatedLayout children={page} title="Card"/>;
