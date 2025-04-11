import {useCallback} from "react";
import {cardColumns} from "@/Constants/Cards/tableColumns.js";
import {router, usePage} from "@inertiajs/react";
import {Datatable} from "@/Components/Datatable.jsx";
import {Button, Tooltip} from "@heroui/react";
import {useQuery} from "@/Context/QueryContext.jsx";
import { format } from 'date-fns';
import deleteIcon from '/public/icons/png/icon-delete.png';
import editIcon from '/public/icons/png/icon-modify.png';
import showIcon from '/public/icons/png/icon-look.png';

import statusOn from '/public/icons/png/icon-collapse-on.png';
import statusOff from '/public/icons/png/icon-collapse-off.png';

export const CardsTable = ({selectedCards, setSelectedCards, showDeleteModal, showQrCodeModal}) => {
  const {cards} = usePage().props;
  const {query, onSort, setPage, loadingState} = useQuery();

  const page = {
    current: cards['meta']['current_page'],
    last: cards['meta']['last_page'],
    set: setPage,
    total: cards['meta']['total']
  };

  const sort = {
    descriptor: {
      column: query.sorting?.column || "created_at",
      direction: query.sorting?.direction || "descending",
    },
    set: onSort
  };

  const renderCell = useCallback((card, columnKey) => {
    const cellValue = card[columnKey];
    switch (columnKey) {
      case "name":
        const activeProfile = card.profiles.find(profile => profile.active === 1);
        if (activeProfile && activeProfile.profile_name && activeProfile.profile_lastname) {
          return `${activeProfile.profile_name} ${activeProfile.profile_lastname}`;
        }else if (card.name) {
          return card.name[0].toUpperCase() + card.name.slice(1);
        }else {
          return '';
        }
      case "email":
        return card.user_id === 2 ? '' : cellValue;
      case "slug":
        return (
          card.status === 1 ? (
            <a target="_blank" href={`/card/${cellValue}`} className="flex items-center decoration-0 text-black">
              <span>{cellValue}</span>
              <img
                src="/icons/png/icon-follow-link.png"
                alt="Follow Link Icon"
                style={{marginLeft: '8px'}}
                className="size-3"
              />
            </a>
          ) : (
            <span>{cellValue}</span>
          )
        );
      case "created_at":
        return <div className="flex">{format(new Date(cellValue), 'dd/MM/yyyy')}</div>;
      case "activated_at":
        return <div className="flex">{cellValue ? format(new Date(cellValue), 'dd/MM/yyyy') : ''}</div>;
      case "status":
        return <div className="flex">{cellValue ? <img src={statusOn} alt="On" className="w-8" /> : <img src={statusOff} alt="Off" className="w-8" />}</div>;
      case "actions":
        return (
          <div className="flex">

            <Tooltip content="QRcode card">
              <Button
                isIconOnly
                endContent={<img src={qrIcon} alt="QR Icon" className="size-8"/>}
                variant="light"
                onPress={() => showQrCodeModal(card)}
                /*onPress={() => {
                  if (card.status === 1) {
                    showQrCodeModal(card);
                  }
                }}*/
              />
            </Tooltip>

            <Tooltip content="Vedi card">
              <Button
                isIconOnly
                endContent={<img src={showIcon} alt="Show Icon" className="size-8"/>}
                variant="light"
                onPress={() => {
                  if (card.status === 1) {
                    window.open(`/card/${card.slug}`, '_blank');
                  }
                }}
              />
            </Tooltip>

            <Tooltip content="Modifica card">
              <Button
                isIconOnly
                endContent={<img src={editIcon} alt="Edit Icon" className="size-8"/>}
                variant="light"
                onPress={() => {
                  if (card.status === 1) {
                    window.open(route("cards.edit", card.id), '_blank');
                  }
                }}
              />
            </Tooltip>
            <Tooltip color="danger" content="Elimina card">
              <Button isIconOnly endContent={<img src={deleteIcon} alt="Delete Icon" className="size-8"/>} variant="light" onPress={() => showDeleteModal(card)} />
            </Tooltip>
          </div>
        );
      default:
        return cellValue;
    }
  }, [showDeleteModal]);

  return (
    <Datatable
      data={cards.data}
      dataColumns={cardColumns}
      renderCell={renderCell}
      selected={selectedCards}
      setSelected={setSelectedCards}
      sort={sort}
      page={page}
      entity="Card"
      loadingState={loadingState}
    />
  );
};
