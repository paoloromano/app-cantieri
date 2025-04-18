import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.jsx";
import {useCallback, useState} from "react";
import {QueryProvider} from "@/Context/QueryContext.jsx";
import {DipendentiTable} from "@/Partials/Dipendenti/DipendentiTable.jsx";
import {DipendentiTableHeader} from "@/Partials/Dipendenti/DipendentiTableHeader.jsx";
import {DipendenteDeleteModal} from "@/Partials/Dipendenti/DipendenteDeleteModal.jsx";

export default function Index({dipendenti, baseUrl, session_rows_per_page}) {

  const [selectedDipendenti, setSelectedDipendenti] = useState(new Set([]));

  const [modals, setModals] = useState({
    deleteModal: { isOpen: false, dipendenti: [] },
  });

  const openDeleteModal = useCallback((dipendenti) => {
    setModals((prevModals) => ({
      ...prevModals,
      deleteModal: { isOpen: true, dipendenti },
    }));
  }, []);

  const closeModal = useCallback((modalName) => {
    setModals((prevModals) => ({
      ...prevModals,
      [modalName]: { isOpen: false, cards: [], card: null },
    }));
  }, []);

  const showDeleteModal = (dipendente) => {
    const dipendentiToDelete = dipendente ? [dipendente] : Array.from(selectedDipendenti).map(id => ({ id }));
    openDeleteModal(dipendentiToDelete);
  };

  return (
    <>
      <QueryProvider>
        <h1 className="mb-0">Gestione Dipendenti</h1>
        <DipendentiTableHeader
          selectedDipendenti={selectedDipendenti}
          showDeleteModal={showDeleteModal}
        />

        <DipendentiTable
          selectedDipendenti={selectedDipendenti}
          setSelectedDipendenti={setSelectedDipendenti}
          showDeleteModal={showDeleteModal}
        />

        <DipendenteDeleteModal
          dipendenti={modals.deleteModal.dipendenti}
          onClose={() => closeModal('deleteModal')}
        />

      </QueryProvider>
    </>
  );
}

Index.layout = (page) => <AuthenticatedLayout children={page} title="Dipendenti"/>;
