import {Head, Link} from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.jsx";
import {UserForm} from "@/Partials/Users/UserForm.jsx";

export default function Edit({user}) {
  return (
    <>

      <h1>
        <Link href="/users" className="text-primary">
          Utenti
        </Link>
        {" > "}
        <span>Edit {user.name}</span>
      </h1>
      { <UserForm user={user}/> }
    </>
  );
}

Edit.layout = (page) => <AuthenticatedLayout children={page}/>;
