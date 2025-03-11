import {Button, Input} from "@nextui-org/react";
import {router, usePage} from "@inertiajs/react";
import {useQuery} from "@/Context/QueryContext.jsx";
import {updateFiltersNumber} from "@/Utils/updateFiltersNumber.js";
import {useEffect, useState} from "react";

export const CardsTableHeader = ({selectedCards, setSelectedCards, showDeleteModal}) => {
  const {cards} = usePage().props;
  const {query, onFilter} = useQuery();
  const [filtersNumber, setFiltersNumber] = useState(0);

  useEffect(() => updateFiltersNumber(query, setFiltersNumber), [query]);

  const activateCards = (selectedCards) => {
    console.log(selectedCards)
    //Array.from(selectedCards)
    router.post(route('cards.activate'), { cards: selectedCards }, {
      onSuccess: () => {
        console.log('Cards activated successfully');
      },
      onError: (errors) => {
        // Gestisci gli errori qui
        console.error('Error activating cards:', errors);
      }
    });
  }

  const deactivateCards = (selectedCards) => {
    router.post(route('cards.deactivate'), { cards: selectedCards }, {
      onSuccess: () => {
        console.log('Cards deactivated successfully');
      },
      onError: (errors) => {
        // Gestisci gli errori qui
        console.error('Error deactivating cards:', errors);
      }
    });
  }

  const exportCards = (selectedCards) => {
    router.post(route('cards.export'), { cards: selectedCards }, {
      responseType: 'blob',
      onSuccess: (response) => {
        const url = window.URL.createObjectURL(new Blob([response.data]));
        const link = document.createElement('a');
        link.href = url;
        link.setAttribute('download', 'cards_export.csv');
        document.body.appendChild(link);
        link.click();
      },
      onError: (errors) => {
        console.error('Error exporting cards:', errors);
      }
    });
  };

  return (
    <div className="flex flex-col gap-4 mb-3">
      <div className="flex flex-wrap gap-2 justify-between mb-10">
        <span className="text-default-400 text-small">
          {cards.meta.total === 1 ? "Number of record: 1" : `Number of records: ${cards.meta.total}`}
        </span>
      </div>
      <div className="flex flex-col sm:flex-row justify-between sm:space-y-0 items-end gap-3">
        <div className="flex gap-3 flex-wrap sm:flex-nowrap">
          <span className="font-light text-black opacity-30">Bulk Actions</span>
          <a
            href="#"
            className={`p-0 font-light ps-font-color ${selectedCards.size === 0 ? 'opacity-30' : 'opacity-100'}`}
            onClick={(e) => {
              e.preventDefault();
              if (selectedCards.size > 0) {
                showDeleteModal();
              }else if (selectedCards === 'all') {
                showDeleteModal();
              }
            }}
            style={{cursor: selectedCards.size === 0 ? 'not-allowed' : 'pointer'}}
            aria-disabled={selectedCards.size === 0}
          >
            Delete
          </a>
          <a
            href="#"
            className={`p-0 font-light ps-font-color ${selectedCards.size === 0 ? 'opacity-30' : 'opacity-100'}`}
            onClick={(e) => {
              e.preventDefault();
              if (selectedCards.size > 0) {
                activateCards(Array.from(selectedCards));
              } else if (selectedCards === 'all') {
                activateCards(selectedCards);
              }
            }}
            style={{cursor: selectedCards.size === 0 ? 'not-allowed' : 'pointer'}}
            aria-disabled={selectedCards.size === 0}
          >
            Active
          </a>
          <a
            href="#"
            className={`p-0 font-light ps-font-color ${selectedCards.size === 0 ? 'opacity-30' : 'opacity-100'}`}
            onClick={(e) => {
              e.preventDefault();
              if (selectedCards.size > 0) {
                deactivateCards(Array.from(selectedCards));
              } else if (selectedCards === 'all') {
                deactivateCards(selectedCards);
              }
            }}
            style={{cursor: selectedCards.size === 0 ? 'not-allowed' : 'pointer'}}
            aria-disabled={selectedCards.size === 0}
          >
            Deactivate
          </a>
          {/*<a
            href="#"
            className={`p-0 font-light ps-font-color ${selectedCards.size === 0 ? 'opacity-30' : 'opacity-100'}`}
            onClick={(e) => {
              e.preventDefault();
              if (selectedCards.size > 0) {
                exportCards(Array.from(selectedCards));
              } else if (selectedCards === 'all') {
                exportCards(selectedCards);
              }
            }}
            style={{cursor: selectedCards.size === 0 ? 'not-allowed' : 'pointer'}}
            aria-disabled={selectedCards.size === 0}
          >
            Export QR Codes
          </a>*/}
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
