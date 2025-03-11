import React, { useEffect } from "react";
import {Head, router, usePage} from "@inertiajs/react";
import { toast } from "react-toastify";
import { Menu } from "@/Components/Menu/Menu.jsx";
import {Button, cn, Tooltip} from "@nextui-org/react";
import { useBreakpoint } from "@/Utils/useBreakpoint.js";
import { IconLogout } from "@tabler/icons-react";

export default function ShowCardLayout({ children, title }) {

  return (
    <>
      <Head title="Teikei" />
      <main className={
        "transition-all ml-auto"
      }>
        {children}
      </main>

    </>
  );
}
