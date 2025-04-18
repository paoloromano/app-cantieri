import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.jsx";
import {DipendenteEditForm} from "@/Partials/Dipendenti/DipendenteEditForm.jsx";

export default function Create() {
  return (
    <>
      <h1>
        Crea un nuovo dipendente
      </h1>
      <DipendenteEditForm/>
    </>
  );
}

Create.layout = (page) => <AuthenticatedLayout children={page}/>;
