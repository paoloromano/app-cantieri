import React, { useEffect } from "react";
import {Head, router, usePage} from "@inertiajs/react";
import { toast } from "react-toastify";
import { Menu } from "@/Components/Menu/Menu.jsx";
import {Button, cn, Tooltip} from "@nextui-org/react";
import { useBreakpoint } from "@/Utils/useBreakpoint.js";
import { IconLogout } from "@tabler/icons-react";

export default function ShowProfileLayout({ children, title }) {
  const isCompact = useBreakpoint("xl", false);

 const { flash, errors } = usePage().props;
/*useEffect(() => {
    if (flash.success)
      toast.success(flash.success);
    else if (flash.error)
      toast.error(flash.error);
    else if (Object.keys(errors).length > 0)
      toast.error("Si è verificato un errore con la validazione dei dati");
  }, [flash, errors]);*/

  return (
    <>
      <Head title="Teikei" />
      <main className={
        "transition-all ml-auto p-8"
      }>
        {children}
      </main>

    </>
  );
}
