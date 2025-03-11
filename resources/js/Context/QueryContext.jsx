import React, {createContext, useContext, useEffect, useState} from 'react';
import {usePrevious} from 'react-use';
import {router, usePage} from '@inertiajs/react';
import {pickByQuery} from "@/Utils/pickByQuery.js";

const QueryContext = createContext();

export const QueryProvider = ({children}) => {
  const {session_rows_per_page} = usePage().props;
  const [query, setQuery] = useState({...route().params});
  const [loadingState, setLoadingState] = useState('idle');
  const prevQuery = usePrevious(query);

  useEffect(() => {
    if (prevQuery) {
      router.get(route(route().current()), pickByQuery(query, session_rows_per_page), {
        preserveState: true,
        preserveScroll: true,
        replace: true,
        only: [route().current().split('.')[0], 'session_rows_per_page'],
        onStart: () => setLoadingState('loading'),
        onFinish: () => setLoadingState('idle'),
      });
    }
  }, [query]);

  const setPage = (page) => setQuery((prev) => ({...prev, page}));
  const onSort = (sorting) => setQuery((prev) => ({...prev, sorting}));
  const onRowsPerPage = (rows_per_page) => setQuery((prev) => ({...prev, rows_per_page, page: 1}));
  const onFilter = (filters) => setQuery((prev) => ({...prev, ...filters, page: 1}));
  const resetFilter = () => setQuery((prev) => ({...prev.page, ...prev.sorting, ...prev.rows_per_page}));

  return (
    <QueryContext.Provider value={{query, setPage, onSort, onRowsPerPage, onFilter, resetFilter, loadingState}}>
      {children}
    </QueryContext.Provider>
  );
};

export const useQuery = () => {
  return useContext(QueryContext);
};
