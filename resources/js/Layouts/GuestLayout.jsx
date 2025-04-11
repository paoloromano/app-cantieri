import ApplicationLogo from "@/Components/ApplicationLogo.jsx";
import Logo from "../../../public/images/logo-teikei-norm.png";
import {Button} from "@heroui/react";
import showIcon from "../../../public/icons/png/icon-look.png";
import React from "react";

export default function Guest({ children }) {
  return (
    <>
      <div>
        <aside
          className={"flex ml-auto flex-row p-8 transition-width bg-transparent z-10"}
        >
          <div
            className={"flex gap-3"}>
            <div className="flex -ml-[4px] rounded-full">
              <a href={"/"}><img src={Logo} alt="Logo" className="w-32	"/></a>
            </div>
          </div>
          <div
            className={"ml-auto flex flex-col justify-center"}>
            <div className="flex items-center justify-center rounded-full">

            </div>
          </div>
        </aside>
      </div>

      <main className={
        "transition-all ml-auto p-8"
      }>
        {children}
      </main>
    </>
  );
}
