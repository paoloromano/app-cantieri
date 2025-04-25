import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.jsx";
import {TbArrowBack} from "react-icons/tb";
import {router} from "@inertiajs/react";
import {Button} from "@heroui/react";

export default function Show({ dipendente }) {

  return (

      <>

      <div className="flex flex-col sm:flex-row gap-3 mb-2">
        <h1>{dipendente.nome} {dipendente.cognome}</h1>
        <Button
            endContent={<TbArrowBack />}
            color="default"
            onPress={() => {
              router.visit(`/dipendenti`);
            }}
        > torna ai dipendeti </Button>
      </div>
      </>
  );
}

Show.layout = (page) => <AuthenticatedLayout children={page} title="Dipendente"/>;
