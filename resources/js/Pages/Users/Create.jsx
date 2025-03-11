import {Head, Link} from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.jsx";

export default function Create() {
  return (
    <>
      <h1>
        <Link href="/users" className="text-primary">
          Utenti
        </Link>
        {" > "}
        <span>Crea nuovo</span>
      </h1>
      <UserForm/>
    </>
  );
}

Create.layout = (page) => <AuthenticatedLayout children={page}/>;
