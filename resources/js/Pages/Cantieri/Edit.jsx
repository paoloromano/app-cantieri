import {Head, Link} from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.jsx";
import {CantiereEditForm} from "@/Partials/Cantieri/CantiereEditForm.jsx";

export default function Edit({cantiere}) {
  return (
      <>
        <h1>
          Modifica cantiere
        </h1>
        <CantiereEditForm
          cantiere={cantiere}
        />
      </>
  );
}

Edit.layout = (page) => <AuthenticatedLayout children={page}/>;
