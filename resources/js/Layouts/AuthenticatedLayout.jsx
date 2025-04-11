import React, { useEffect } from "react";
import {Head, router, usePage} from "@inertiajs/react";
import { toast } from "react-toastify";
import { Menu } from "@/Components/Menu/Menu.jsx";
import {Button, cn, Tooltip} from "@heroui/react";
import { useBreakpoint } from "@/Utils/useBreakpoint.js";
import { IconLogout } from "@tabler/icons-react";

export default function AuthenticatedLayout({ children, title }) {
  const isCompact = useBreakpoint("xl", false);

  return (
    <>
      <Head title="Me.Gio.Cri" />
      <Menu isCompact={isCompact} />
      <main className={
        "transition-all ml-auto p-8"
      }>
        {children}
      </main>

    </>
  );
}
