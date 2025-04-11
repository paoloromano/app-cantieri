import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.jsx";
import {Card, CardHeader, CardBody, CardFooter, Divider, Link, Image} from "@heroui/react";

import {FaBuilding} from 'react-icons/fa';
import {FaPeopleRoof} from "react-icons/fa6";
import {MdOutlineRequestQuote, MdRequestQuote} from "react-icons/md";

export default function Homepage() {

    return (
        <>
            <div className="gap-2 grid lg:grid-cols-4 xs:grid-cols-1">

                <Card className="max-w-[400px]">
                    <CardHeader className="flex gap-3">
                        <FaBuilding />
                        <div className="flex flex-col">
                            <p className="text-md">Gestione Cantieri</p>
                        </div>
                    </CardHeader>
                    <Divider/>
                    <CardBody>
                        <p>Aggiungi, modifica o rimuovi i tuoi cantieri.</p>
                    </CardBody>
                    <Divider/>
                    <CardFooter>
                        <Link className={'ps_button_link'} showAnchorIcon href="/cantieri">
                            Gestisci i cantieri
                        </Link>
                    </CardFooter>
                </Card>

                <Card className="max-w-[400px]">
                    <CardHeader className="flex gap-3">
                        <FaPeopleRoof />
                        <div className="flex flex-col">
                            <p className="text-md">Gestione Dipendenti</p>
                        </div>
                    </CardHeader>
                    <Divider/>
                    <CardBody>
                        <p>Aggiungi, modifica o rimuovi i tuoi dipendenti.</p>
                    </CardBody>
                    <Divider/>
                    <CardFooter>
                        <Link className={'ps_button_link'} showAnchorIcon href="/dipendenti">
                            Gestisci i dipendenti
                        </Link>
                    </CardFooter>
                </Card>

                <Card className="max-w-[400px]">
                    <CardHeader className="flex gap-3">
                        <MdOutlineRequestQuote />
                        <div className="flex flex-col">
                            <p className="text-md">Gestione Preventivi</p>
                        </div>
                    </CardHeader>
                    <Divider/>
                    <CardBody>
                        <p>Aggiungi, modifica o rimuovi i tuoi preventivi.</p>
                    </CardBody>
                    <Divider/>
                    <CardFooter>
                        <Link className={'ps_button_link'} showAnchorIcon href="/preventivi">
                            Gestisci i preventivi
                        </Link>
                    </CardFooter>
                </Card>

                <Card className="max-w-[400px]">
                    <CardHeader className="flex gap-3">
                        <MdRequestQuote />
                        <div className="flex flex-col">
                            <p className="text-md">Gestione Consuntivi</p>
                        </div>
                    </CardHeader>
                    <Divider/>
                    <CardBody>
                        <p>Aggiungi, modifica o rimuovi i tuoi consuntivi.</p>
                    </CardBody>
                    <Divider/>
                    <CardFooter>
                        <Link className={'ps_button_link'} showAnchorIcon href="/consuntivi">
                            Gestisci i consuntivi
                        </Link>
                    </CardFooter>
                </Card>

            </div>
        </>
    );
}

Homepage.layout = (page) => <AuthenticatedLayout children={page} title="Homepage"/>;
