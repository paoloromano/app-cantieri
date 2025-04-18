import {Head, Link} from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.jsx";
import {DipendenteEditForm} from "@/Partials/Dipendenti/DipendenteEditForm.jsx";

export default function Edit({dipendente}) {

  console.log(dipendente);

  return (
      <>
        <h1>
          Modifica dipendente
        </h1>
        <DipendenteEditForm
          dipendente={dipendente}
        />
      </>
  );
}

Edit.layout = (page) => <AuthenticatedLayout children={page}/>;
