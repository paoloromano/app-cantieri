import React, {useState, useEffect} from "react";
import {Head, router, useForm} from "@inertiajs/react";
import {Button, Checkbox, Input, Spacer} from "@heroui/react";
import GuestLayout from "@/Layouts/GuestLayout.jsx";
import {IconEye, IconEyeOff, IconLock, IconMail} from "@tabler/icons-react";
import IconPswHide from "../../../../public/icons/png/icon-visibility-off.png";
import IconPswShow from "../../../../public/icons/png/icon-visibility-on.png";

export default function Error({status}) {

  return (
    <>
      <Head title="Me.Gio.Cri"/>

      <div className={"flex flex-col"}>
        <h1>OPS! Qualcosa è andato storto..</h1>
        <p>Per poter utilizzare la tua TCard occorre <strong>creare un nuovo account dopo aver ricevuto un link di registrazione personalizzato.</strong></p>
      </div>

    </>
  );
}

Error.layout = (page) =>
  <GuestLayout children={page}/>
;
