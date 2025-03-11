import {Input} from "@nextui-org/react";
import {usePage} from "@inertiajs/react";
import {RowsPerPage} from "@/Components/Input/RowsPerPage.jsx";
import {IconSearch} from "@tabler/icons-react";

export const UsersTableHeader = ({searchValue, rowsPerPage, onSearch, onRowsPerPage}) => {
  const {users} = usePage().props;

  return (
    <>
      <div className="flex flex-col gap-4">
        <div className="flex flex-col sm:flex-row justify-between sm:space-y-0 items-end gap-3">
          <Input
            isClearable
            className="w-full sm:w-96"
            placeholder="Cerca utente..."
            startContent={<IconSearch/>}
            value={searchValue || ""}
            onValueChange={onSearch}
            classNames={{
              inputWrapper: "h-full",
              input: "h-full",
            }}
          />
          <div className="flex gap-3 flex-wrap sm:flex-nowrap">
            <Button color="primary" endContent={<NewUserIcon className="size-5"/>} onPress={() => router.visit(route("users.create"))}>
              Nuovo utente
            </Button>
          </div>
        </div>
        <div className="flex flex-wrap gap-2 justify-between">
          <span className="text-default-400 text-small">
            {users.meta.total === 1 ? "Trovato 1 utente" : `Trovati ${users.meta.total} utenti`}
          </span>
          <RowsPerPage rowsPerPage={rowsPerPage} onRowsPerPage={onRowsPerPage}/>
        </div>
      </div>
    </>
  );
};
