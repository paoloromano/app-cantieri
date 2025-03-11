import React, { useEffect, useRef, useState } from 'react';
import { Input, Button } from "@nextui-org/react";
import { useForm } from "@inertiajs/react";
import IconSave from "../../../../public/icons/png/icon-save.png";
import IconAddNewDocument from "../../../../public/icons/png/icon-add-profile.png";
import IconDocument from "../../../../public/icons/png/icon-fallback-document.png";
import IconDelete from "../../../../public/icons/png/icon-delete.png";
import IconCollapse from "../../../../public/icons/png/icon-collapse-on.png";
import IconExpand from "../../../../public/icons/png/icon-collapse-off.png";

const DocumentsProfileFE = ({ profile, themeColor, profileButtonColor, profileLinkColor }) => {

  const IconDocument = () => (
    <svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" width="20" height="25" viewBox="0 0 20 25">
      <defs>
        <clipPath id="clip-path">
          <rect id="Rettangolo_903" data-name="Rettangolo 903" width="20" height="25" transform="translate(0 0.5)"/>
        </clipPath>
      </defs>
      <g id="Raggruppa_818" data-name="Raggruppa 818" transform="translate(0 -0.5)">
        <g id="Raggruppa_529" data-name="Raggruppa 529" clipPath="url(#clip-path)">
          <path id="Tracciato_1042" data-name="Tracciato 1042"
                d="M5,20H15V17.5H5Zm0-5H15V12.5H5ZM2.5,25a2.412,2.412,0,0,1-1.766-.734A2.412,2.412,0,0,1,0,22.5V2.5A2.412,2.412,0,0,1,.734.734,2.412,2.412,0,0,1,2.5,0h10L20,7.5v15A2.505,2.505,0,0,1,17.5,25ZM11.25,8.75V2.5H2.5v20h15V8.75ZM2.5,2.5v0Z"
                transform="translate(0 0)"
                fill={"white"}
          />
        </g>
      </g>
    </svg>

  );

  return (
    <>
      <div className="flex flex-col">
        {profile.documents.map((document) => {
          return (
            <div key={document.id} className="flex items-center space-x-4 mb-3">
              <a href={document.document_path} target="_blank" rel="noopener noreferrer" className="flex items-center space-x-4">
                <div
                  className="flex-shrink-0 rounded-full flex items-center justify-center w-12 h-12"
                  style={{backgroundColor: profileButtonColor}}
                >
                  <IconDocument />
                </div>
                <div className={
                  `flex-grow
          ${themeColor === 'light' ? 'text-black' : 'text-white'}
          text-base font-light`
                }>
                  {document.document_name}
                </div>
              </a>
            </div>
          );
        })}
      </div>
    </>
  );
};

export default DocumentsProfileFE;
