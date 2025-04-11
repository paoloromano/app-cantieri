import {Head, Link} from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.jsx";
import {CantiereEditForm} from "@/Partials/Cantieri/CantiereEditForm.jsx";

export default function Create() {
  return (
    <>
      <h1>
        Crea un nuovo cantiere
      </h1>
      <CantiereEditForm/>
    </>
  );
}

Create.layout = (page) => <AuthenticatedLayout children={page}/>;
