import {useCallback, useState} from "react";
import {userColumns} from "@/Constants/Users/tableColumns.js";
import {router, usePage} from "@inertiajs/react";
import {Datatable} from "@/Components/Datatable.jsx";
import {Button, Tooltip} from "@heroui/react";


export const UsersTable = ({onSort, setPage, sortDescriptor, topContent, loadingState, selectedUsers, setSelectedUsers}) => {
  const [showDelete, setShowDelete] = useState(false);
  const {users, auth} = usePage().props;

  const renderCell = useCallback((user, columnKey) => {
    const cellValue = user[columnKey];
    switch (columnKey) {
      case "actions":
        return (
          <div className="flex">
            <>
              <Tooltip content="Modifica utente">
                <Button isIconOnly variant="light" onPress={() => router.visit(route("users.edit", user.id))}>
                  Edit
                </Button>
              </Tooltip>
              <Tooltip color="danger" content="Elimina utente">
                <Button isIconOnly variant="light" onPress={() => setShowDelete(user)}>
                  Del
                </Button>
              </Tooltip>
            </>
          </div>
        );
      default:
        return cellValue;
    }
  }, []);

  return (
    <>
      <Datatable
        data={users.data}
        dataColumns={userColumns}
        renderCell={renderCell}
        selectedData={selectedUsers}
        setSelectedData={setSelectedUsers}
        sortDescriptor={sortDescriptor || {column: "created_at", direction: "descending"}}
        onSort={onSort}
        loadingState={loadingState}
        topContent={topContent}
        meta={{currentPage: users.meta.current_page, lastPage: users.meta.last_page, setPage: setPage, total: users.meta.total}}
        entity="utente"
        entityPlural="utenti"
      />
    </>
  );
};
