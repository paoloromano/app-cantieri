import {useCallback} from "react";
import {cantiereColumns} from "@/Constants/Cantieri/tableColumns.js";
import {router, usePage} from "@inertiajs/react";
import {Datatable} from "@/Components/Datatable.jsx";
import {Button, Tooltip} from "@heroui/react";
import {useQuery} from "@/Context/QueryContext.jsx";
import { format } from 'date-fns';

import { BiShow } from "react-icons/bi";
import { BiEditAlt } from "react-icons/bi";
import { RiDeleteBin5Line } from "react-icons/ri";

export const CantieriTable = ({selectedCantieri, setSelectedCantieri, showDeleteModal}) => {
  const {cantieri} = usePage().props;
  const {query, onSort, setPage, loadingState} = useQuery();

  const page = {
    current: cantieri['meta']['current_page'],
    last: cantieri['meta']['last_page'],
    set: setPage,
    total: cantieri['meta']['total']
  };

  const sort = {
    descriptor: {
      column: query.sorting?.column || "created_at",
      direction: query.sorting?.direction || "descending",
    },
    set: onSort
  };

  const renderCell = useCallback((cantiere, columnKey) => {
    const cellValue = cantiere[columnKey];
    switch (columnKey) {
      case "data_inizio":
        return <div className="flex">{format(new Date(cellValue), 'dd/MM/yyyy')}</div>;
      case "data_fine":
        return <div className="flex">{cellValue ? format(new Date(cellValue), 'dd/MM/yyyy') : 'In corso'}</div>;
      case "actions":
        return (
          <div className="flex">
            <Tooltip content="Vedi cantiere">
              <Button
                isIconOnly
                endContent={<BiShow/>}
                variant="light"
                onPress={() => {
                    window.open(`/card/${cantiere.id}`);
                }}
              />
            </Tooltip>

            <Tooltip content="Modifica cantiere">
              <Button
                isIconOnly
                endContent={<BiEditAlt/>}
                variant="light"
                onPress={() => {
                    window.open(route("cantieri.edit", cantiere.id));
                }}
              />
            </Tooltip>
            <Tooltip color="danger" content="Elimina cantiere">
              <Button
                  isIconOnly
                  endContent={<RiDeleteBin5Line/>}
                  variant="light"
                  onPress={() => showDeleteModal(cantiere)}
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
      data={cantieri.data}
      dataColumns={cantiereColumns}
      renderCell={renderCell}
      selected={selectedCantieri}
      setSelected={setSelectedCantieri}
      sort={sort}
      page={page}
      entity="Cantiere"
      loadingState={loadingState}
    />
  );
};
