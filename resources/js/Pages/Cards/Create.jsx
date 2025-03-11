import {Head, Link} from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.jsx";
import {CardCreateForm} from "@/Partials/Cards/CardCreateForm.jsx";

export default function Create() {
  return (
    <>
      <h1>

      </h1>
      <CardCreateForm/>
    </>
  );
}

Create.layout = (page) => <AuthenticatedLayout children={page}/>;
