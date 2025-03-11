import React, {useState} from "react";
import {Head, Link, useForm, usePage} from "@inertiajs/react";
import AuthenticatedCardRoleLayout from "@/Layouts/AuthenticatedCardRoleLayout.jsx";
import iconBack from '/public/icons/png/icon-back.png';
import { Button, Input } from "@nextui-org/react";
import IconSave from "../../../../public/icons/png/icon-save.png";

export default function EditUrlSetting({ card, translations }) {
  const { data, setData, patch, errors } = useForm({
    url_setting: card.url_setting || ''
  });

  console.log(translations)

  const { props } = usePage();
  const feedback = props.flash.success;
  const [errorMessage, setErrorMessage] = useState(null);

  const handleSubmit = (e) => {
    e.preventDefault();
    patch(route('cards.updateUrlSetting', { card: card.id }), {
      onSuccess: () => {

      },
      onError: (page) => {
        if (page.url_setting) {
          setErrorMessage(page.url_setting + ' Prova con un altro valore.');
        } else {
          setErrorMessage('An unexpected error occurred.');
        }
      }
    });
  };

  return (
    <>

      <div className=" mx-auto p-6">
        <div className="flex items-center space-x-4 mb-6">
          <Link className={"min-w-10"} href={route('cards.edit', {id: card.id})}>
            <img
              src={iconBack}
              alt="Back"
              className="w-10 h-10 rounded-full cursor-pointer"
            />
          </Link>
          <div>
            <p className="text-2xl font-light">{translations.be_url_setting}</p>
          </div>
        </div>

        <p className="text-base font-light">
          {translations.be_url_setting_desc}
        </p>

        <form onSubmit={handleSubmit} className="mt-10 space-y-3">
          <Input
            className="text-sm"
            value={data.url_setting}
            onChange={(e) => setData("url_setting", e.target.value)}
            required
            color={errors.url_setting ? "danger" : ""}
            errorMessage={errors.url_setting}
            labelPlacement="outside"
            label="nfcbusinesscard.it/card/"
          />

          {feedback && <div className="mt-4 text-green-600">{feedback}</div>}
          {errorMessage && <div className="mt-4 text-red-500">{errorMessage}</div>}

          <div className="flex justify-end items-end gap-4">
            <Button
              type="submit"
              className="flex justify-end pr-0 bg-transparent text-2xl font-light ps-font-color"
              startContent={<img src={IconSave} alt="Salva" className="size-8"/>}
            >
              Save
            </Button>
          </div>
        </form>

      </div>
    </>
  );
}

EditUrlSetting.layout = (page) => <AuthenticatedCardRoleLayout children={page} card={page.props.card} title={"Modifica Card"}/>;
