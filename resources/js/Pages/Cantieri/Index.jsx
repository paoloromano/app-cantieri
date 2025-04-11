import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.jsx";
import {useCallback, useState} from "react";
import {QueryProvider} from "@/Context/QueryContext.jsx";
import {CantieriTable} from "@/Partials/Cantieri/CantieriTable.jsx";
import {CantieriTableHeader} from "@/Partials/Cantieri/CantieriTableHeader.jsx";
import {CantiereDeleteModal} from "@/Partials/Cantieri/CantiereDeleteModal.jsx";

export default function Index({cantieri, baseUrl, session_rows_per_page}) {

  const [selectedCantieri, setSelectedCantieri] = useState(new Set([]));

  const [modals, setModals] = useState({
    deleteModal: { isOpen: false, cantieri: [] },
  });

  const openDeleteModal = useCallback((cantieri) => {
    setModals((prevModals) => ({
      ...prevModals,
      deleteModal: { isOpen: true, cantieri },
    }));
  }, []);

  const closeModal = useCallback((modalName) => {
    setModals((prevModals) => ({
      ...prevModals,
      [modalName]: { isOpen: false, cards: [], card: null },
    }));
  }, []);

  const showDeleteModal = (cantiere) => {
    const cantieriToDelete = cantiere ? [cantiere] : Array.from(selectedCantieri).map(id => ({ id }));
    openDeleteModal(cantieriToDelete);
  };

  return (
    <>
      <QueryProvider>
        <h1 className="mb-0">Gestione Cantieri</h1>
        <CantieriTableHeader
          selectedCantieri={selectedCantieri}
          showDeleteModal={showDeleteModal}
        />

        <CantieriTable
          selectedCantieri={selectedCantieri}
          setSelectedCantieri={setSelectedCantieri}
          showDeleteModal={showDeleteModal}
        />

        <CantiereDeleteModal
          cantieri={modals.deleteModal.cantieri}
          onClose={() => closeModal('deleteModal')}
        />

      </QueryProvider>
    </>
  );
}

Index.layout = (page) => <AuthenticatedLayout children={page} title="Cantieri"/>;
