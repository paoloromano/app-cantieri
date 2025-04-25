import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.jsx";
import {Button, Card, CardBody, CardFooter, CardHeader, Divider} from "@heroui/react";
import {FaBuilding} from "react-icons/fa";
import {router} from "@inertiajs/react";
import {TbArrowBack} from "react-icons/tb";
import { FaRegMoneyBillAlt } from "react-icons/fa";


export default function Show({ cantiere }) {

    console.log(cantiere);

  return (
      <>


        <div className="flex flex-col sm:flex-row gap-3 mb-2">
          <h1>Cantiere: {cantiere.nome}</h1>
          <Button
              endContent={<TbArrowBack />}
              color="default"
              onPress={() => {
                router.visit(`/cantieri`);
              }}
          > torna ai cantieri </Button>
        </div>

        <div className="gap-2 grid lg:grid-cols-4 xs:grid-cols-1 mb-2">
          <Button
              endContent={<FaRegMoneyBillAlt />}
              color="primary"
              onPress={() => {
                router.visit(`/cantieri`);
              }}
          >
            Dettaglio costi cantiere
          </Button>

          <Button
          >
            Aggiungi costo cantiere
          </Button>

          <Button
          >
            Dettaglio ore dipendenti
          </Button>

          <Button
          >
            Aggiungi ore dipendente
          </Button>

        </div>

        <div className="gap-2 grid lg:grid-cols-4 xs:grid-cols-1">

          <Card className="max-w-[400px]">
            <CardHeader className="flex gap-3">
              <FaBuilding/>
              <div className="flex flex-col">
                <p className="text-md">Informazioni Cantiere</p>
              </div>
            </CardHeader>
            <Divider/>
            <CardBody>
              <ul>
                <li className="text-lg">Nome Cantiere</li>
                <li className="text-lg">Descrizione</li>
                <li className="text-lg">Data inizio cantiere</li>
                <li className="text-lg">Data fine cantiere</li>
                <li className="text-lg">Totale ore lavorate</li>
                <li className="text-lg">Totale costi cantiere</li>
              </ul>
            </CardBody>
            <Divider/>
            <CardFooter></CardFooter>
          </Card>

        </div>


      </>
  );
}

Show.layout = (page) => <AuthenticatedLayout children={page} title="Cantiere"/>;
