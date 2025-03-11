import React, { useEffect, useRef, useState } from 'react';
import { Input, Button, Select, SelectItem, Avatar } from "@nextui-org/react";
import { useForm } from "@inertiajs/react";
import IconSave from "../../../../public/icons/png/icon-save.png";
import IconAddNewLink from "../../../../public/icons/png/icon-add-profile.png";
import IconDelete from "../../../../public/icons/png/icon-delete.png";
import IconLink from "/public/icons/png/icon-fallback-link.png"
import IconCollapse from "../../../../public/icons/png/icon-collapse-on.png";
import IconExpand from "../../../../public/icons/png/icon-collapse-off.png";

const LinksProfileFE = ({ profile, themeColor, profileButtonColor, profileLinkColor }) => {

  const IconLink = () => (
    <svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" width="23" height="11" viewBox="0 0 23 11">
      <defs>
        <clipPath id="clip-path">
          <rect id="Rettangolo_1256" data-name="Rettangolo 1256" width="23" height="11" transform="translate(-0.398 0.034)"/>
        </clipPath>
      </defs>
      <g id="Raggruppa_819" data-name="Raggruppa 819" transform="translate(0.398 -0.034)" clipPath="url(#clip-path)">
        <path id="Tracciato_1295" data-name="Tracciato 1295"
              d="M10.075,11.195H5.6A5.4,5.4,0,0,1,1.637,9.558,5.4,5.4,0,0,1,0,5.6,5.4,5.4,0,0,1,1.637,1.637,5.4,5.4,0,0,1,5.6,0h4.478V2.239H5.6a3.24,3.24,0,0,0-2.379.98A3.24,3.24,0,0,0,2.239,5.6a3.24,3.24,0,0,0,.98,2.379,3.24,3.24,0,0,0,2.379.98h4.478ZM6.717,4.478h8.956V6.717H6.717Zm5.6,6.717V8.956h4.478a3.24,3.24,0,0,0,2.379-.98A3.24,3.24,0,0,0,20.15,5.6a3.24,3.24,0,0,0-.98-2.379,3.24,3.24,0,0,0-2.379-.98H12.314V0h4.478a5.4,5.4,0,0,1,3.961,1.637A5.4,5.4,0,0,1,22.389,5.6a5.4,5.4,0,0,1-1.637,3.961,5.4,5.4,0,0,1-3.961,1.637Z"
              transform="translate(-0.093 0.07)"
              fill={"white"}
        />
      </g>
    </svg>
  );

  return (
    <>
      <div className="flex flex-col">
        {profile.links.map((link) => {
          return (
            <div key={link.id} className="flex items-center space-x-4 mb-3">
              <a href={link.link_url} target="_blank" rel="noopener noreferrer" className="flex items-center space-x-4">
                <div
                  className="flex-shrink-0 rounded-full flex items-center justify-center w-12 h-12"
                  style={{backgroundColor: profileButtonColor}}
                >
                  <IconLink />
                </div>
                <div className={
                  `flex-grow
          ${themeColor === 'light' ? 'text-black' : 'text-white'}
          text-base font-light`
                }>
                  {link.link_name}
                </div>
              </a>
            </div>
          );
        })}
      </div>
    </>
  );
};

export default LinksProfileFE;
