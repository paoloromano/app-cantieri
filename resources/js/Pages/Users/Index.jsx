import {router} from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.jsx";
import {useEffect, useMemo, useState} from "react";
import {usePrevious} from "react-use";
import {UsersTable} from "@/Partials/Users/UsersTable.jsx";
import {UsersTableHeader} from "@/Partials/Users/UsersTableHeader.jsx";
import {pickByQuery} from "@/Utils/pickByQuery.js";

export default function Index({session_rows_per_page}) {
  const [query, setQuery] = useState(route().params);
  const [loadingState, setLoadingState] = useState("idle");
  const [selectedUsers, setSelectedUsers] = useState(new Set());

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
        only: ["users", "session_rows_per_page"],
        onStart: () => setLoadingState("loading"),
        onFinish: () => setLoadingState("idle"),
      });
    }
  }, [query]);

  const topContent = useMemo(() => {
    return (
      <UsersTableHeader searchValue={query.search} rowsPerPage={query.rows_per_page} onSearch={onSearch} onRowsPerPage={onRowsPerPage}/>
    );
  }, [query.search, query.rows_per_page]);

  return (
    <>
      <h1 className="!mb-5">Utenti</h1>
      <UsersTable
        onSort={onSort}
        setPage={setPage}
        sortDescriptor={query.sorting}
        topContent={topContent}
        loadingState={loadingState}
        selectedUsers={selectedUsers}
        setSelectedUsers={setSelectedUsers}
      ></UsersTable>
    </>
  );
}

Index.layout = (page) => <AuthenticatedLayout children={page} title="Utenti"/>;
