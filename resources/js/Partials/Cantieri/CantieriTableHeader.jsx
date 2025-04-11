import {Button, Input} from "@heroui/react";
import {router, usePage} from "@inertiajs/react";
import {useQuery} from "@/Context/QueryContext.jsx";
import {updateFiltersNumber} from "@/Utils/updateFiltersNumber.js";
import {useEffect, useState} from "react";

export const CantieriTableHeader = ({selectedCantieri, setSelectedCantieri, showDeleteModal}) => {
  const {cantieri} = usePage().props;
  const {query, onFilter} = useQuery();
  const [filtersNumber, setFiltersNumber] = useState(0);

  useEffect(() => updateFiltersNumber(query, setFiltersNumber), [query]);



  return (
    <div className="flex flex-col gap-4 mb-3">
      <div className="flex flex-wrap gap-2 justify-between mb-10">
        <span className="text-default-400 text-small">
          {`Numero di cantieri: ${cantieri.meta.total}`}
        </span>
      </div>
      <div className="flex flex-col sm:flex-row justify-between sm:space-y-0 items-end gap-3">
          <div className="flex gap-3 flex-wrap sm:flex-nowrap">
              <span className="font-light text-black opacity-30">Operazioni:</span>
              <a
                  onClick={(e) => {
                      e.preventDefault();
                      router.get('cantieri/create');
                  }}
                  className={`p-0 ps-font-color cursor-pointer`}
              >
                  Aggiungi
              </a>
              <a
                  href="#"
                  className={`p-0 ps-font-color ${selectedCantieri.size === 0 ? 'opacity-30' : 'opacity-100'}`}
                  onClick={(e) => {
                      e.preventDefault();
                      if (selectedCantieri.size > 0) {
                          showDeleteModal();
                      } else if (selectedCantieri === 'all') {
                          showDeleteModal();
                      }
                  }}
                  style={{cursor: selectedCantieri.size === 0 ? 'not-allowed' : 'pointer'}}
                  aria-disabled={selectedCantieri.size === 0}
              >
                  Delete
              </a>
          </div>
          <div className="flex gap-3 flex-wrap sm:flex-nowrap">
              <Input
                  isClearable
                  label="Filter"
                  labelPlacement="outside-left"
                  className="w-70"
                  placeholder=""
                  value={query.search || ""}
                  onValueChange={(search) => onFilter({search})}
              />
          </div>
      </div>
    </div>
  );
};
