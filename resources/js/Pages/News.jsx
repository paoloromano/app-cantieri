import { Head } from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.jsx";
import { useState } from "react";
import { Card } from "@heroui/react";

export default function News() {
  const [showFilter, setShowFilter] = useState(false);

  return (
    <>

      <h1 className="mb-8 text-3xl font-bold">News</h1>
      <Card className="p-5">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam assumenda, atque aut corporis ducimus, eaque,
        eligendi laboriosam magni pariatur rem repellendus sint tenetur ullam! Ducimus eaque numquam quo reprehenderit
        voluptates.
      </Card>
    </>
  );
}

News.layout = (page) => <AuthenticatedLayout children={page} />;
