import React, { useCallback, useState } from "react";
import { cn } from "@nextui-org/react";
import Logo from "/public/images/logo-teikei-norm.png";
import iconPlus from "/public/icons/png/icon-new-url.png";
import { usePage } from "@inertiajs/react";
import SidebarCreateCard from "@/Components/SidebarCreateCard.jsx";
import placeholderProfilePhoto from "/public/images/profile/icon-fallback-profile.png";
import SidebarProfile from "@/Components/SidebarProfile.jsx";

export const Menu = ({ isCompact }) => {
  const { user } = usePage().props.auth;

  const [logo, setLogo] = useState(() => {
    return user?.company?.company_logo?.trim()
      ? `/storage/${user.company.company_logo.replace("public/", "")}`
      : placeholderProfilePhoto;
  });

  const [isSidebarCreateCardOpen, setSidebarCreateCardOpen] = useState(false);
  const [isSidebarProfileOpen, setSidebarProfileOpen] = useState(false);

  const handleOpenSidebarCreateCard = useCallback(() => {
    setSidebarCreateCardOpen(true);
  }, []);

  const handleCloseSidebarCreateCard = useCallback(() => {
    setSidebarCreateCardOpen(false);
  }, []);

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
          className={cn("flex items-center gap-3 px-3", {
            "justify-center gap-0": isCompact,
          })}>
          <div className="flex -ml-[4px] -mt-3 items-center justify-center rounded-full w-32">
            <img src={Logo} alt="Logo" />
          </div>
          <div className="flex items-center justify-center rounded-full">
            {user.role_id === 1 &&
              <button onClick={handleOpenSidebarCreateCard} className="ml-4">
                <img src={iconPlus} alt="add card" className="lg:size-12 size-10" />
              </button>
            }
          </div>
        </div>
        <div
          className={cn("ml-auto flex flex-col justify-center", {
            "items-center": isCompact,
          })}>
          <div className="flex items-center justify-center rounded-full">
            Hi, {user.name}
            <button onClick={handleOpenSidebarProfile} className="ml-4">
              <img src={logo} alt="Profile" className="rounded-full w-24 h-24" />
            </button>
          </div>
        </div>
      </aside>

      <SidebarCreateCard
        isOpen={isSidebarCreateCardOpen}
        onClose={handleCloseSidebarCreateCard}
      />

      <SidebarProfile
        isOpen={isSidebarProfileOpen}
        onClose={handleCloseSidebarProfile}
        user={user}
      />

      {isSidebarCreateCardOpen && <div className="fixed inset-0" onClick={handleCloseSidebarCreateCard}></div>}
      {isSidebarProfileOpen && <div className="fixed inset-0" onClick={handleCloseSidebarProfile}></div>}
    </div>
  );
}
