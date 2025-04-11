import React, { useCallback, useState } from "react";
import {Button, cn} from "@nextui-org/react";
import { usePage } from "@inertiajs/react";
import SidebarProfile from "@/Components/SidebarProfile.jsx";

export const Menu = ({ isCompact }) => {
  const { user } = usePage().props.auth;

  const [isSidebarProfileOpen, setSidebarProfileOpen] = useState(false);

  const handleOpenSidebarProfile = useCallback(() => {
    setSidebarProfileOpen(true);
  }, []);

  const handleCloseSidebarProfile = useCallback(() => {
    setSidebarProfileOpen(false);
  }, []);

  return (
    <div>
      <aside
        className={cn("flex w-full flex-row p-6 transition-width bg-transparent z-10", {
          "w-full items-center px-2 py-6": isCompact,
        })}
      >
        <div
          className={cn("flex items-center px-3", {
            "justify-center gap-0": isCompact,
          })}>
          <div className="flex items-center justify-center">
              <h3 className={"text-4xl"}><a href={"/"}>Me.Gio.Cri.</a></h3>
          </div>
        </div>
        <div
          className={cn("ml-auto flex flex-col justify-center", {
            "items-center": isCompact,
          })}>
          <div className="flex items-center justify-center">
              <Button className="ml-4 btn button-primary" onPress={handleOpenSidebarProfile}>
                  Gestione Profilo
              </Button>
          </div>
        </div>
      </aside>

      <SidebarProfile
        isOpen={isSidebarProfileOpen}
        onClose={handleCloseSidebarProfile}
        user={user}
      />

      {isSidebarProfileOpen && <div className="fixed inset-0" onClick={handleCloseSidebarProfile}></div>}
    </div>
  );
}
