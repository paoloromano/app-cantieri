import React, {useRef, useState} from 'react';
import {Input, Button, Textarea} from "@nextui-org/react";
import IconSave from "../../../../public/icons/png/icon-save.png";
import {useForm} from "@inertiajs/react";
import IconCollapse from "../../../../public/icons/png/icon-collapse-on.png";
import IconExpand from "../../../../public/icons/png/icon-collapse-off.png";

const BioProfileFE = ({ profile, themeColor, profileButtonColor, profileLinkColor }) => {


  return (
    <p
      className={
        `
        ${
          themeColor === 'light' ? 'text-black' : 'text-white'
        }
        text-base font-light`
      }
    >
      {profile.profile_bio}
    </p>
  );
};

export default BioProfileFE;
