import {useCallback} from "react";
import {router, usePage} from "@inertiajs/react";
import {Datatable} from "@/Components/Datatable.jsx";
import {Button, Tooltip} from "@heroui/react";
import {useQuery} from "@/Context/QueryContext.jsx";
import {dipendenteColumns} from "@/Constants/Dipendenti/tableColumns.js";

import { BiShow } from "react-icons/bi";
import { BiEditAlt } from "react-icons/bi";
import { RiDeleteBin5Line } from "react-icons/ri";

export const DipendentiTable = ({selectedDipendenti, setSelectedDipendenti, showDeleteModal}) => {
  const {dipendenti} = usePage().props;
  const {query, onSort, setPage, loadingState} = useQuery();

  const page = {
    current: dipendenti['meta']['current_page'],
    last: dipendenti['meta']['last_page'],
    set: setPage,
    total: dipendenti['meta']['total']
  };

  const sort = {
    descriptor: {
      column: query.sorting?.column || "created_at",
      direction: query.sorting?.direction || "descending",
    },
    set: onSort
  };

  const renderCell = useCallback((dipendente, columnKey) => {
    const cellValue = dipendente[columnKey];
    switch (columnKey) {
      case "actions":
        return (
          <div className="flex">
            <Tooltip content="Vedi dipendente">
              <Button
                isIconOnly
                endContent={<BiShow/>}
                variant="light"
                onPress={() => {
                  router.visit(`/dipendente/${dipendente.id}`);
                }}
              />
            </Tooltip>

            <Tooltip content="Modifica dipendente">
              <Button
                isIconOnly
                endContent={<BiEditAlt/>}
                variant="light"
                onPress={() => {
                  router.visit(`/dipendenti/${dipendente.id}/edit`);
                }}
              />
            </Tooltip>
            <Tooltip color="danger" content="Elimina dipendente">
              <Button
                  isIconOnly
                  endContent={<RiDeleteBin5Line/>}
                  variant="light"
                  onPress={() => showDeleteModal(dipendente)}
              />
            </Tooltip>
          </div>
        );
      default:
        return cellValue;
    }
  }, [showDeleteModal]);

  return (
    <Datatable
      data={dipendenti.data}
      dataColumns={dipendenteColumns}
      renderCell={renderCell}
      selected={selectedDipendenti}
      setSelected={setSelectedDipendenti}
      sort={sort}
      page={page}
      entity="Dipendente"
      loadingState={loadingState}
    />
  );
};
