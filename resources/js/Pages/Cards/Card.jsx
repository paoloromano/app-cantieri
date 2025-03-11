import {router} from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.jsx";
import {useCallback, useEffect, useMemo, useState} from "react";
import {usePrevious} from "react-use";
import {CardsTable} from "@/Partials/Cards/CardsTable.jsx";
import {CardsTableHeader} from "@/Partials/Cards/CardsTableHeader.jsx";
import {CardsDeleteModal} from "@/Partials/Cards/CardsDeleteModal.jsx";
import {pickByQuery} from "@/Utils/pickByQuery.js";

export default function Card({session_rows_per_page}) {
  const [query, setQuery] = useState(route().params);
  const [loadingState, setLoadingState] = useState("idle");

  const [modals, setModals] = useState({
    deleteModal: false,
  });

  const openModal = useCallback((modalName) => {
    setModals((prevModals) => ({...prevModals, [modalName]: true}));
  }, []);

  const closeModal = useCallback((modalName) => {
    setModals((prevModals) => ({...prevModals, [modalName]: false}));
  }, []);

  const setPage = (page) => setQuery((prev) => ({...prev, page}));
  const onSearch = (search) => setQuery((prev) => ({...prev, search, page: 1}));
  const onSort = (sorting) => setQuery((prev) => ({...prev, sorting}));
  const onRowsPerPage = (rows_per_page) => setQuery((prev) => ({...prev, rows_per_page, page: 1}));

  const prevQuery = usePrevious(query);
  useEffect(() => {
    if (prevQuery) {
      router.get(route(route().current()), pickByQuery(query, session_rows_per_page), {
        preserveState: true,
        preserveScroll: true,
        replace: true,
        only: ["cards", "session_rows_per_page"],
        onStart: () => setLoadingState("loading"),
        onFinish: () => setLoadingState("idle"),
      });
    }
  }, [query]);

  const topContent = useMemo(() => {
    return (
      <CardsTableHeader searchValue={query.search} rowsPerPage={query.rows_per_page} onSearch={onSearch} onRowsPerPage={onRowsPerPage}/>
    );
  }, [query.search, query.rows_per_page]);

  return (
    <>
      <h1 className="!mb-5">Card</h1>
      <CardsTable
        onSort={onSort}
        setPage={setPage}
        sortDescriptor={query.sorting}
        showDeleteModal={(card) => setModals((prevModals) => ({...prevModals, deleteModal: card}))}
        topContent={topContent}
        loadingState={loadingState}
      ></CardsTable>

      <CardsDeleteModal
        card={modals.deleteModal}
        onClose={() => closeModal('deleteModal')}
      />
    </>
  );
}

Card.layout = (page) => <AuthenticatedLayout children={page} title="Card"/>;
