import React, {useState} from "react";
import {Head, Link, useForm, usePage} from "@inertiajs/react";
import AuthenticatedCardRoleLayout from "@/Layouts/AuthenticatedCardRoleLayout.jsx";
import iconBack from "../../../../public/icons/png/icon-back.png";
import {Button, cn, Input, Switch} from "@nextui-org/react";
import IconDelete from "../../../../public/icons/png/icon-delete.png";
import {Inertia} from "@inertiajs/inertia";
import {all} from "axios";

export default function Index({ card, leads, translations }) {

  const { props } = usePage();
  const successMessage = props.flash?.success;

  const handleDownload = () => {
    Inertia.post(route("lead.sendCsv", { card: card.id }));
  };

  const handleDeleteAllLeads = () => {
    if (confirm("Sei sicuro di voler cancellare tutti i lead?")) {
      Inertia.delete(route("lead.deleteAll", { card: card.id }), {
        onSuccess: () => {

        },
        onError: () => {
          console.log("Errore nella cancellazione dei lead.");
        }
      });
    }
  }

  const IconSendCSV = () => (
    <svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30">
      <defs>
        <clipPath id="clip-path">
          <rect id="Rettangolo_904" data-name="Rettangolo 904" width="30" height="30" transform="translate(0.136 0.136)"/>
        </clipPath>
      </defs>
      <g id="Raggruppa_815" data-name="Raggruppa 815" transform="translate(1629 497)">
        <g id="Raggruppa_533" data-name="Raggruppa 533" transform="translate(-1629.136 -497.136)">
          <g id="Raggruppa_532" data-name="Raggruppa 532" clipPath="url(#clip-path)">
            <path id="Tracciato_1044" data-name="Tracciato 1044"
                  d="M3.027,30.271a2.921,2.921,0,0,1-2.139-.888A2.921,2.921,0,0,1,0,27.244V10.6A2.921,2.921,0,0,1,.888,8.456a2.921,2.921,0,0,1,2.139-.888H10.6V3.027A2.921,2.921,0,0,1,11.483.888,2.921,2.921,0,0,1,13.622,0h3.027a2.921,2.921,0,0,1,2.139.888,2.921,2.921,0,0,1,.888,2.139V7.568h7.568A3.033,3.033,0,0,1,30.271,10.6V27.244a3.033,3.033,0,0,1-3.027,3.027Zm0-3.027H27.244V10.6H19.676a3.033,3.033,0,0,1-3.027,3.027H13.622A3.033,3.033,0,0,1,10.6,10.6H3.027Zm3.027-3.027h9.081v-.681a2.13,2.13,0,0,0-.36-1.193,2.376,2.376,0,0,0-1-.851,7.79,7.79,0,0,0-1.533-.51,8,8,0,0,0-3.291,0,7.79,7.79,0,0,0-1.533.51,2.376,2.376,0,0,0-1,.851,2.13,2.13,0,0,0-.36,1.193Zm12.109-2.27h6.054v-2.27H18.163ZM10.6,19.676A2.27,2.27,0,1,0,8.986,15.8,2.27,2.27,0,0,0,10.6,19.676m7.568-2.27h6.054v-2.27H18.163ZM13.622,10.6h3.027V3.027H13.622Z"
                  transform="translate(0 0)"
                  fill={"white"}
            />
          </g>
        </g>
      </g>
    </svg>
  );

  const IconEmail = () => (
    <svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" width="24" height="19" viewBox="0 0 24 19">
      <defs>
        <clipPath id="clip-path">
          <rect id="Rettangolo_897" data-name="Rettangolo 897" width="24" height="19" transform="translate(0 0.399)"/>
        </clipPath>
      </defs>
      <g id="Raggruppa_607" data-name="Raggruppa 607" transform="translate(0 -0.399)">
        <g id="Raggruppa_513" data-name="Raggruppa 513" transform="translate(0 0)" clipPath="url(#clip-path)">
          <path id="Tracciato_1029" data-name="Tracciato 1029"
                d="M2.425,19.4a2.339,2.339,0,0,1-1.713-.712A2.339,2.339,0,0,1,0,16.974V2.425A2.339,2.339,0,0,1,.712.712,2.339,2.339,0,0,1,2.425,0h19.4a2.339,2.339,0,0,1,1.713.712,2.339,2.339,0,0,1,.712,1.713V16.974A2.43,2.43,0,0,1,21.823,19.4Zm9.7-8.487L2.425,4.85V16.974h19.4V4.85Zm0-2.425,9.7-6.062H2.425ZM2.425,4.85v0Z"
                transform="translate(0 0)"
                fill={"#26ACBE"}
          />
        </g>
      </g>
    </svg>

  );

  return (
    <>

      <div className=" mx-auto p-6">
        <div className="flex items-center w-full space-x-4 mb-6">

          <Link className={"min-w-10"} href={route('cards.edit', {id: card.id})}>
            <img
              src={iconBack}
              alt="Back"
              className="w-10 h-10 rounded-full cursor-pointer"
            />
          </Link>

          <div>
            <p className="text-2xl font-light">{translations.be_lead}</p>
          </div>

          <div className="flex-grow"></div>

          <div className="flex items-center">
            <button
              onClick={handleDownload}
              className="w-40 h-16 rounded-full flex items-center justify-center bg-primary"
            >
              <IconSendCSV/>
              <div className="text-left text-white ml-2 text-base leading-tight max-w-20">
                {translations.be_button_send_leads}
              </div>
            </button>
          </div>
        </div>

        <p className="text-base font-light">
          {translations.be_lead_instruction}
        </p>

        {successMessage && (
          <div className="mb-4 p-4 text-green-700 bg-green-100 rounded">
            {successMessage}
          </div>
        )}

        <div className="mt-4">
          {Object.keys(leads).map((date) => (
            <div key={date} className="mb-6">
              <p className="bg-primary rounded-xl text-[15px] font-light w-40 text-center text-white mb-2">{date}</p>
              <ul className="space-y-4">
                {leads[date].map((lead) => (
                  <li key={lead.id} className=" border-b-13 rounded-md">
                    {lead.lead_company_name && <p className={"font-bold"}>{lead.lead_company_name}</p>}
                    <p>{lead.lead_name} {lead.lead_lastname}</p>
                    <p className="flex justify-between items-center">
                      {lead.lead_email}
                      <a href={`mailto:${lead.lead_email}`} className="ml-2">
                        <IconEmail/>
                      </a>
                    </p>
                  </li>
                ))}
              </ul>
            </div>
          ))}
        </div>

        {Object.keys(leads).length > 0 &&
          <div className="flex justify-between pb-20">
            <Button
              onClick={handleDeleteAllLeads}
              className="bg-transparent text-2xl font-light ps-font-color px-0"
              startContent={<img src={IconDelete} alt="Salva" className="size-8"/>}
            >
              {translations.be_button_delete_leads}
            </Button>
          </div>

        }

        {Object.keys(leads).length === 0 &&
          <div className="flex justify-between pb-20"><p>{translations.be_text_no_lead}</p></div>
        }

      </div>
    </>
  );
}

Index.layout = (page) => <AuthenticatedCardRoleLayout children={page} card={page.props.card} title={"Modifica Card"}/>;
