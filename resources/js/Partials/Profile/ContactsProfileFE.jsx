import React, {useRef, useState} from 'react';
import { Input, Button } from "@nextui-org/react";
import IconSave from "../../../../public/icons/png/icon-save.png";
import IconPhone from "../../../../public/icons/png/icon-phone.png";
import IconMobilePhone from "../../../../public/icons/png/icon-mobile.png";
import IconEmail from "../../../../public/icons/png/icon-email.png";
import IconWebsite from "../../../../public/icons/png/icon-web.png";
import {useForm} from "@inertiajs/react";
import IconCollapse from "../../../../public/icons/png/icon-collapse-on.png";
import IconExpand from "../../../../public/icons/png/icon-collapse-off.png";

const ContactsProfileFE = ({ profile, themeColor, profileButtonColor, profileLinkColor }) => {

  const formatPhoneNumber = (phoneNumber) => {
    let formattedNumber = phoneNumber.replace(/\s+/g, '').replace(/-/g, '');
    if (!formattedNumber.startsWith('+39')) {
      formattedNumber = `+39${formattedNumber}`;
    }
    return formattedNumber;
  };

  const formatUrl = (url) => {
    if (!url.startsWith('http://') && !url.startsWith('https://')) {
      return `http://${url}`;
    }
    return url;
  };

  const IconEmail = () => (
    <svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" width="24" height="19" viewBox="0 0 24 19">
      <defs>
        <clipPath id="clip-path">
          <rect id="Rettangolo_897" data-name="Rettangolo 897" width="24" height="19" transform="translate(0 0.399)"/>
        </clipPath>
      </defs>
      <g id="Raggruppa_607" data-name="Raggruppa 607" transform="translate(0 -0.399)">
        <g id="Raggruppa_513" data-name="Raggruppa 513" transform="translate(0 0)" clipPath="url(#clip-path)">
          <path id="Tracciato_1029" data-name="Tracciato 1029"
                d="M2.425,19.4a2.339,2.339,0,0,1-1.713-.712A2.339,2.339,0,0,1,0,16.974V2.425A2.339,2.339,0,0,1,.712.712,2.339,2.339,0,0,1,2.425,0h19.4a2.339,2.339,0,0,1,1.713.712,2.339,2.339,0,0,1,.712,1.713V16.974A2.43,2.43,0,0,1,21.823,19.4Zm9.7-8.487L2.425,4.85V16.974h19.4V4.85Zm0-2.425,9.7-6.062H2.425ZM2.425,4.85v0Z"
                transform="translate(0 0)"
                fill={"white"}
          />
        </g>
      </g>
    </svg>

  );

  const IconPhone = () => (
    <svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" width="21" height="21" viewBox="0 0 21 21">
      <defs>
        <clipPath id="clip-path">
          <rect id="Rettangolo_896" data-name="Rettangolo 896" width="21" height="21" transform="translate(0.419 0.419)"/>
        </clipPath>
      </defs>
      <g id="Raggruppa_511" data-name="Raggruppa 511" transform="translate(-0.419 -0.326)">
        <g id="Raggruppa_510" data-name="Raggruppa 510" transform="translate(0 -0.094)" clipPath="url(#clip-path)">
          <path id="Tracciato_1028" data-name="Tracciato 1028"
                d="M20.088,21.332a17.778,17.778,0,0,1-7.318-1.615A21.886,21.886,0,0,1,6.192,15.14,21.911,21.911,0,0,1,1.614,8.562,17.8,17.8,0,0,1,0,1.244,1.215,1.215,0,0,1,1.244,0h4.8a1.1,1.1,0,0,1,.741.282A1.079,1.079,0,0,1,7.17.948L7.94,5.1a2.1,2.1,0,0,1-.03.8,1.25,1.25,0,0,1-.326.563l-2.874,2.9a14.228,14.228,0,0,0,1.408,2.119,20.725,20.725,0,0,0,1.792,1.97,20.848,20.848,0,0,0,1.926,1.7,18.956,18.956,0,0,0,2.133,1.436l2.785-2.785a1.649,1.649,0,0,1,.7-.4,1.918,1.918,0,0,1,.845-.075l4.089.83a1.369,1.369,0,0,1,.681.43,1.041,1.041,0,0,1,.267.7v4.8a1.215,1.215,0,0,1-1.244,1.244M3.585,7.111,5.54,5.155l-.5-2.785H2.4a24.283,24.283,0,0,0,.415,2.4,13,13,0,0,0,.77,2.341M14.192,17.717a14.784,14.784,0,0,0,2.355.8,14.431,14.431,0,0,0,2.415.385V16.3l-2.785-.563Z"
                transform="translate(0 0.087)"
                fill={"white"}
          />
        </g>
      </g>
    </svg>

  );

  const IconMobilePhone = () => (

    <svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" width="17" height="27" viewBox="0 0 17 27">
      <defs>
        <clipPath id="clip-path">
          <rect id="Rettangolo_1185" data-name="Rettangolo 1185" width="17" height="27" transform="translate(0 -0.483)" fill="none"/>
        </clipPath>
      </defs>
      <g id="Raggruppa_613" data-name="Raggruppa 613" transform="translate(0 0.768)">
        <g id="Raggruppa_613-2" data-name="Raggruppa 613" transform="translate(0 -0.286)" clipPath="url(#clip-path)">
          <path id="Tracciato_1071" data-name="Tracciato 1071"
                d="M2.385,26.237a2.3,2.3,0,0,1-1.685-.7A2.3,2.3,0,0,1,0,23.851V2.385A2.3,2.3,0,0,1,.7.7,2.3,2.3,0,0,1,2.385,0H14.311A2.3,2.3,0,0,1,16,.7a2.3,2.3,0,0,1,.7,1.685V23.851a2.39,2.39,0,0,1-2.385,2.385Zm0-2.385H14.311V20.274H2.385Zm5.963-.6a1.173,1.173,0,1,0-.849-.343,1.151,1.151,0,0,0,.849.343M2.385,17.889H14.311V5.963H2.385Zm0-14.311H14.311V2.385H2.385Zm0,16.7v0Zm0-16.7v0Z"
                transform="translate(0 0.281)"
                fill={"white"}
          />
        </g>
      </g>
    </svg>

  );

  const IconWebsite = () => (
    <svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
      <defs>
        <clipPath id="clip-path">
          <rect id="Rettangolo_898" data-name="Rettangolo 898" width="24" height="24" transform="translate(0 0)"/>
        </clipPath>
      </defs>
      <g id="Raggruppa_609" data-name="Raggruppa 609" transform="translate(0 0)">
        <g id="Raggruppa_515" data-name="Raggruppa 515" transform="translate(0 0)" clipPath="url(#clip-path)">
          <path id="Tracciato_1031" data-name="Tracciato 1031"
                d="M12,24a11.591,11.591,0,0,1-4.65-.946,12.079,12.079,0,0,1-6.406-6.4A11.611,11.611,0,0,1,0,12,11.575,11.575,0,0,1,.944,7.336,12.118,12.118,0,0,1,7.35.946,11.591,11.591,0,0,1,12,0a11.556,11.556,0,0,1,4.664.946,12.161,12.161,0,0,1,6.39,6.39A11.576,11.576,0,0,1,24,12a11.612,11.612,0,0,1-.946,4.65,12.121,12.121,0,0,1-6.39,6.4A11.556,11.556,0,0,1,12,24m0-2.46a15.3,15.3,0,0,0,1.35-2.25,14.184,14.184,0,0,0,.93-2.49H9.72a14.184,14.184,0,0,0,.93,2.49A15.3,15.3,0,0,0,12,21.54m-3.12-.48A16.615,16.615,0,0,1,7.934,19a17.59,17.59,0,0,1-.674-2.2H3.72a9.961,9.961,0,0,0,2.174,2.61A8.634,8.634,0,0,0,8.88,21.06m6.24,0A8.629,8.629,0,0,0,18.1,19.41,9.965,9.965,0,0,0,20.28,16.8H16.74a17.594,17.594,0,0,1-.676,2.2,16.435,16.435,0,0,1-.944,2.056M2.7,14.4H6.78c-.06-.4-.106-.8-.134-1.186S6.6,12.42,6.6,12s.014-.824.046-1.214S6.72,10,6.78,9.6H2.7a10.44,10.44,0,0,0-.226,1.186,9.948,9.948,0,0,0,0,2.429A10.44,10.44,0,0,0,2.7,14.4m6.48,0h5.64c.06-.4.1-.8.134-1.186S15,12.42,15,12s-.016-.824-.046-1.214S14.88,10,14.82,9.6H9.18c-.06.4-.106.8-.136,1.186S9,11.58,9,12s.014.824.044,1.214S9.12,14,9.18,14.4m8.04,0H21.3a10.175,10.175,0,0,0,.224-1.186,9.792,9.792,0,0,0,0-2.429A10.175,10.175,0,0,0,21.3,9.6H17.22c.06.4.1.8.134,1.186S17.4,11.58,17.4,12s-.016.824-.046,1.214S17.28,14,17.22,14.4m-.48-7.2h3.54A9.965,9.965,0,0,0,18.1,4.59,8.629,8.629,0,0,0,15.12,2.94,16.435,16.435,0,0,1,16.064,5a17.594,17.594,0,0,1,.676,2.2m-7.02,0h4.56a14.184,14.184,0,0,0-.93-2.49A15.3,15.3,0,0,0,12,2.46a15.3,15.3,0,0,0-1.35,2.25A14.184,14.184,0,0,0,9.72,7.2m-6,0H7.26A17.59,17.59,0,0,1,7.934,5,16.615,16.615,0,0,1,8.88,2.94,8.634,8.634,0,0,0,5.894,4.59,9.961,9.961,0,0,0,3.72,7.2"
                transform="translate(0 0)"
                fill={"white"}
          />
        </g>
      </g>
    </svg>

  );

  return (

    <>
      {profile.profile_phone && (
        <div className="flex items-center space-x-4 mb-3">
          <a href={`tel:${formatPhoneNumber(profile.profile_phone)}`} className="flex items-center space-x-4">
            <div
              className="flex-shrink-0 rounded-full flex items-center justify-center w-12 h-12"
              style={{backgroundColor: profileButtonColor}}
            >
              <IconPhone/>
            </div>
            <div className={
              `flex-grow
                ${themeColor === 'light' ? 'text-black' : 'text-white'}
                text-base font-light`
            }>
              {profile.profile_phone}
            </div>
          </a>
        </div>
      )}

      {profile.profile_mobile_phone && (
        <div className="flex items-center space-x-4 mb-3">
          <a href={`tel:${formatPhoneNumber(profile.profile_mobile_phone)}`} className="flex items-center space-x-4">
            <div
              className="flex-shrink-0 rounded-full flex items-center justify-center w-12 h-12"
              style={{backgroundColor: profileButtonColor}}
            >
              <IconMobilePhone/>
            </div>
            <div className={
              `flex-grow
                ${themeColor === 'light' ? 'text-black' : 'text-white'}
                text-base font-light`
            }>
              {profile.profile_mobile_phone}
            </div>
          </a>
        </div>
      )}

      {profile.profile_email && (
        <div className="flex items-center space-x-4 mb-3">
          <a href={`mailto:${profile.profile_email}`} className="flex items-center space-x-4">
            <div
              className="flex-shrink-0 rounded-full flex items-center justify-center w-12 h-12"
              style={{backgroundColor: profileButtonColor}}
            >
              <IconEmail/>
            </div>
            <div className={
              `flex-grow
        ${themeColor === 'light' ? 'text-black' : 'text-white'}
        text-base font-light`
            }>
              {profile.profile_email}
            </div>
          </a>
        </div>
      )}

      {profile.profile_website && (
        <div className="flex items-center space-x-4 mb-3">
          <a href={formatUrl(profile.profile_website)} target="_blank" rel="noopener noreferrer" className="flex items-center space-x-4">
            <div
              className="flex-shrink-0 rounded-full flex items-center justify-center w-12 h-12"
              style={{backgroundColor: profileButtonColor}}
            >
              <IconWebsite />
            </div>
            <div className={
              `flex-grow
        ${themeColor === 'light' ? 'text-black' : 'text-white'}
        text-base font-light`
            }>
              {profile.profile_website}
            </div>
          </a>
        </div>
      )}

    </>
  );
};

export default ContactsProfileFE;
