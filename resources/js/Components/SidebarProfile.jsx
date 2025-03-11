import React, { useState } from "react";
import {Button, Spacer, Tooltip} from "@nextui-org/react";
import Edit from "@/Pages/Profile/Edit.jsx";
import {router} from "@inertiajs/react";

const SidebarCreateCard = ({ isOpen, onClose, user}) => {

  return (
    <div className={`ps-sidebar fixed right-0 top-0 h-full xl:w-2/5 lg:w-2/3 md:w-3/4 w-96 transition-transform z-50 ${isOpen ? 'transform-none' : 'transform translate-x-full'}`}>

      <div className="p-6">

        <Edit user={user}/>

        <Spacer y={"2"} />

        <Button
          className={"text-white font-light pl-0"}
          variant="light"
          onPress={() => router.post(route("logout"))}
        >
          Logout
        </Button>

      </div>
    </div>
  );
};

export default SidebarCreateCard;
