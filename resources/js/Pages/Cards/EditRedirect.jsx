import React, {useState} from "react";
import {Head, Link, useForm, usePage} from "@inertiajs/react";
import AuthenticatedCardRoleLayout from "@/Layouts/AuthenticatedCardRoleLayout.jsx";
import iconBack from "../../../../public/icons/png/icon-back.png";
import {Button, cn, Input, Switch} from "@nextui-org/react";
import IconSave from "../../../../public/icons/png/icon-save.png";

export default function EditRedirect({ card, translations}) {
  const { data, setData, patch, errors } = useForm({
    redirect: card.redirect || '',
    redirect_status: card.redirect_status || 0
  });

  const { props } = usePage();
  const feedback = props.flash.success;
  const [errorMessage, setErrorMessage] = useState(null);

  const handleSubmit = (e) => {
    e.preventDefault();
    patch(route('cards.updateRedirect', { card: card.id }), {
      onSuccess: () => {
        setErrorMessage('');
      },
      onError: (page) => {
        setErrorMessage(page.redirect)
      }
    });
  };

  return (
    <>

      <div className=" mx-auto p-6">
        <div className="flex items-center space-x-4 mb-6">
          <Link className={"min-w-9"} href={route('cards.edit', { id: card.id })}>
            <img
              src={iconBack}
              alt="Back"
              className="w-10 h-10 rounded-full cursor-pointer"
            />
          </Link>
          <div>
            <p className="text-2xl font-light">{translations.be_redirect}</p>
          </div>
        </div>

        <p className="text-base font-light">
          {translations.be_redirect_setting_desc}
        </p>

        <form onSubmit={handleSubmit} className="mt-6 space-y-3">
          <label htmlFor="redirect" className="text-[16px] font-medium">
            {translations.be_enter_full_url}
          </label>

          <Input
            type="text"
            id="redirect"
            value={data.redirect}
            onChange={(e) => setData("redirect", e.target.value)}
            color={errors.redirect ? "danger" : ""}
            errorMessage={errors.redirect}
          />

          <div className="flex items-center mt-4">
            <label htmlFor="redirect_status" className="text-[16px] font-medium mr-2">
              {translations.be_label_active_redirect}
            </label>
            <Switch
              classNames={{
                wrapper: "p-0 h-4 overflow-visible",
                thumb: cn("ps_thumb_switch w-6 h-6 ",
                  "group-data-[hover=true]:border-primary",
                  //selected
                  "group-data-[selected=true]:ml-6",

                  {
                    "ps_thumb_active_color": data.redirect_status === 1, // change color here when selected
                    "bg-white": data.redirect_status !== 1, // default color when not selected
                  },

                  // pressed
                  "group-data-[pressed=true]:w-7",
                  "group-data-[selected]:group-data-[pressed]:ml-4",
                ),
              }}
              defaultSelected={data.redirect_status === 1}
              onChange={(e) => setData("redirect_status", e.target.checked ? 1 : 0)}
            />

          </div>

          {feedback && <div className="mt-4 text-green-600">{feedback}</div>}
          {errorMessage && <div className="mt-4 text-red-500">{errorMessage}</div>}

          <div className="flex justify-end items-end gap-4">
            <Button
              type="submit"
              className="flex justify-end pr-0 bg-transparent text-2xl font-light ps-font-color"
              startContent={<img src={IconSave} alt="Salva" className="size-8" />}
            >
              Save
            </Button>
          </div>
        </form>
      </div>
    </>
  );
}

EditRedirect.layout = (page) => <AuthenticatedCardRoleLayout children={page} card={page.props.card} title={"Modifica Card"} />;
