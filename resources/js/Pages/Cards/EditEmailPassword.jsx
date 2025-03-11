import React, { useRef, useState } from "react";
import { Head, Link, useForm, usePage } from "@inertiajs/react";
import AuthenticatedCardRoleLayout from "@/Layouts/AuthenticatedCardRoleLayout.jsx";
import iconBack from "../../../../public/icons/png/icon-back.png";
import UpdateCardUserInformationForm from "@/Partials/Profile/UpdateCardUserInformationForm.jsx";
import UpdateCardUserPasswordForm from "@/Partials/Profile/UpdateCardUserPasswordForm.jsx";

export default function EditEmailPassword({ card, user_email, translations }) {

  const { props } = usePage();
  const user = props.auth.user;

  const { data, setData, patch, errors, processing, recentlySuccessful, reset } = useForm({
    email: user_email,
    password: '',
    password_confirmation: '',
  });

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
            <p className="text-2xl font-light">{translations.be_email_and_psw}</p>
          </div>
        </div>

        {user && user.role_id === 3 && (
          <>
            <p className="text-base font-light">
              {translations.be_email_setting_desc}
            </p>

            <UpdateCardUserInformationForm translations={translations}/>

            <UpdateCardUserPasswordForm translations={translations}/>

          </>
        )}

        {user && user.role_id != 3 && (
          <p className="text-base font-light">
            {translations.be_email_setting_desc_super_admin}
          </p>
        )}
      </div>
    </>
  );
}

EditEmailPassword.layout = (page) => <AuthenticatedCardRoleLayout children={page} card={page.props.card} title={"Modifica Card"} />;
