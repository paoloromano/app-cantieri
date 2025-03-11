import React, { useState } from "react";
import { Button, Tooltip } from "@nextui-org/react";
import {CardCreateForm} from "@/Partials/Cards/CardCreateForm.jsx";

const SidebarCreateCard = ({ isOpen, onClose }) => {

  return (
    <div className={`ps-sidebar fixed right-0 top-0 h-full lg:w-1/3 w-96 transition-transform z-50 ${isOpen ? 'transform-none' : 'transform translate-x-full'}`}>
      <div className="p-6">
        <CardCreateForm onClose={onClose} />
      </div>
    </div>
  );
};

export default SidebarCreateCard;
