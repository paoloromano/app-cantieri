import React, {useRef, useState} from 'react';
import {Input, Button, Spacer} from "@nextui-org/react";
import IconSave from "../../../../public/icons/png/icon-save.png";
import IconEditImage from "/public/icons/png/icon-modify.png";
import IconDeleteImage from "/public/icons/png/icon-delete.png";
import {useForm} from "@inertiajs/react";
import IconExpand from "/public/icons/png/icon-collapse-off.png";
import IconCollapse from "/public/icons/png/icon-collapse-on.png";

function createGoogleMapsLink(address) {

  if (!address){
    return null;
  }

  const baseUrl = "https://www.google.com/maps/search/?api=1&query=";
  const encodedAddress = encodeURIComponent(address); // Codifica l'indirizzo
  return baseUrl + encodedAddress;

}

const CompanyInfoProfileFE = ({ profile, themeColor, profileButtonColor, profileLinkColor, translations}) => {

  const fullAddress =
    profile.profile_company_name &&
    profile.profile_company_first_address &&
    profile.profile_zipcode &&
    profile.profile_city &&
    profile.profile_province &&
    profile.profile_country
      ? `${profile.profile_company_name}, ${profile.profile_company_first_address}, ${profile.profile_zipcode} ${profile.profile_city}, ${profile.profile_province}, ${profile.profile_country}`
      : null;

  const googleMapsLink = createGoogleMapsLink(fullAddress);

  const formatPhoneNumber = (phoneNumber) => {

    let formattedNumber = phoneNumber.replace(/\s+/g, '').replace(/-/g, '');
    if (!formattedNumber.startsWith('+39')) {
      formattedNumber = `+39${formattedNumber}`;
    }

    return formattedNumber;
  };

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

  const IconFax = () => (
    <svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" width="31" height="27" viewBox="0 0 31 27">
      <defs>
        <clipPath id="clip-path">
          <rect id="Rettangolo_1321" data-name="Rettangolo 1321" width="31" height="27" transform="translate(0 -0.15)"/>
        </clipPath>
      </defs>
      <g id="Raggruppa_939" data-name="Raggruppa 939" transform="translate(0.057 0.549)">
        <g id="Raggruppa_938" data-name="Raggruppa 938" transform="translate(-0.057 -0.399)" clipPath="url(#clip-path)">
          <path id="Tracciato_1319" data-name="Tracciato 1319"
                d="M4.624,26.2a4.461,4.461,0,0,1-3.275-1.349A4.461,4.461,0,0,1,0,21.577V10.789A4.461,4.461,0,0,1,1.349,7.514,4.461,4.461,0,0,1,4.624,6.165a4.294,4.294,0,0,1,1.908.424A5.223,5.223,0,0,1,8.053,7.706H9.247V0H24.66V7.706H26.2a4.6,4.6,0,0,1,4.624,4.624V24.66H8.053a5.223,5.223,0,0,1-1.521,1.117,4.294,4.294,0,0,1-1.908.424m0-3.082a1.516,1.516,0,0,0,1.541-1.541V10.789A1.516,1.516,0,0,0,4.624,9.247a1.516,1.516,0,0,0-1.541,1.541V21.577a1.516,1.516,0,0,0,1.541,1.541M12.33,7.706h9.247V3.082H12.33ZM9.247,21.577H27.742V12.33A1.516,1.516,0,0,0,26.2,10.789H9.247Zm10.789-6.165a1.516,1.516,0,1,0-1.1-.444,1.487,1.487,0,0,0,1.1.444m4.624,0a1.516,1.516,0,1,0-1.1-.444,1.487,1.487,0,0,0,1.1.444m-4.624,4.624a1.516,1.516,0,1,0-1.1-.444,1.487,1.487,0,0,0,1.1.444m4.624,0a1.516,1.516,0,1,0-1.1-.444,1.487,1.487,0,0,0,1.1.444m-13.871,0h6.165V12.33H10.789ZM9.247,21.577v0Z"
                transform="translate(0.047 0.324)"
                fill={"white"}
          />
        </g>
      </g>
    </svg>

  );

  const IconPec = () => (
    <svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" width="28" height="24" viewBox="0 0 28 24">
      <defs>
        <clipPath id="clip-path">
          <rect id="Rettangolo_1322" data-name="Rettangolo 1322" width="28" height="24" transform="translate(0 -0.228)"/>
        </clipPath>
      </defs>
      <g id="Raggruppa_941" data-name="Raggruppa 941" transform="translate(0 0.028)">
        <g id="Raggruppa_940" data-name="Raggruppa 940" transform="translate(0 0.2)" clipPath="url(#clip-path)">
          <path id="Tracciato_1320" data-name="Tracciato 1320"
                d="M18.571,23.962,12.913,18.3l1.864-1.864,3.794,3.794,7.522-7.522,1.864,1.864ZM13.312,9.319l10.65-6.656H2.662Zm0,2.662L2.662,5.325V18.637H9.518L12.181,21.3H2.662a2.569,2.569,0,0,1-1.881-.781A2.569,2.569,0,0,1,0,18.637V2.662A2.569,2.569,0,0,1,.781.781,2.569,2.569,0,0,1,2.662,0h21.3a2.569,2.569,0,0,1,1.881.781,2.569,2.569,0,0,1,.781,1.881V8.453l-2.662,2.662V5.325Z"
                transform="translate(0 -0.19)"
                fill={"white"}
          />
        </g>
      </g>
    </svg>

  );

  const IconGoogle = () => (
    <svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" width="25" height="31" viewBox="0 0 25 31">
      <defs>
        <clipPath id="clip-path">
          <rect id="Rettangolo_1305" data-name="Rettangolo 1305" width="25" height="31" transform="translate(0 0)"/>
        </clipPath>
      </defs>
      <g id="Raggruppa_937" data-name="Raggruppa 937" transform="translate(0 -0.204)">
        <g id="Raggruppa_893" data-name="Raggruppa 893" transform="translate(0 0.204)" clipPath="url(#clip-path)">
          <path id="Tracciato_1314" data-name="Tracciato 1314"
                d="M10.844,19.21A27.151,27.151,0,0,0,16.635,14.1,7.59,7.59,0,0,0,18.59,9.489a6.274,6.274,0,0,0-2.169-4.91,8.086,8.086,0,0,0-5.577-1.924A8.086,8.086,0,0,0,5.267,4.578,6.274,6.274,0,0,0,3.1,9.489,7.59,7.59,0,0,0,5.053,14.1a27.151,27.151,0,0,0,5.791,5.109m0,3.351a34.492,34.492,0,0,1-8.152-6.7A10.08,10.08,0,0,1,0,9.489,8.7,8.7,0,0,1,3.021,2.67,11.376,11.376,0,0,1,10.844,0a11.376,11.376,0,0,1,7.823,2.67,8.7,8.7,0,0,1,3.021,6.819A10.08,10.08,0,0,1,19,15.859a34.492,34.492,0,0,1-8.152,6.7m0-10.617a3.258,3.258,0,0,0,2.189-.779,2.388,2.388,0,0,0,0-3.75,3.258,3.258,0,0,0-2.189-.779,3.258,3.258,0,0,0-2.189.779,2.388,2.388,0,0,0,0,3.75,3.258,3.258,0,0,0,2.189.779M0,23.888H21.688v2.654H0Z"
                transform="translate(1.91 2.12)"
                fill={"white"}
          />
        </g>
      </g>
    </svg>

  );

  return (
    <>
      <p className={`font-bold text-lg leading-8 ps-text-${themeColor}`}>{profile.profile_company_name}</p>
      <p className={`font-light text-base ps-text-${themeColor}`}>{profile.profile_company_first_address}</p>
      <p
        className={`font-light text-base ps-text-${themeColor}`}>{profile.profile_zipcode} {profile.profile_city} {profile.profile_province}</p>
      <p className={`font-light text-base ps-text-${themeColor}`}>{profile.profile_country}</p>

      <Spacer y={4}/>

      {fullAddress && (
        <div className="flex items-center space-x-4 mb-3">
          <a href={googleMapsLink} target={"_blank"} className="flex items-center space-x-4">
            <div
              className="flex-shrink-0 rounded-full flex items-center justify-center w-12 h-12"
              style={{backgroundColor: profileButtonColor}}
            >
              <IconGoogle/>
            </div>
            <div className={
              `flex-grow
        ${themeColor === 'light' ? 'text-black' : 'text-white'}
        text-base font-light`
            }>
              {translations.fe_link_google}
            </div>
          </a>
        </div>
      )}

      {profile.profile_company_phone && (
        <div className="flex items-center space-x-4 mb-3">
          <a href={`tel:${formatPhoneNumber(profile.profile_company_phone)}`} className="flex items-center space-x-4">
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
              {profile.profile_company_phone}
            </div>
          </a>
        </div>
      )}

      {profile.profile_company_fax && (
        <div className="flex items-center space-x-4 mb-3">
          <div
            className="flex-shrink-0 rounded-full flex items-center justify-center rounded-ful w-12 h-12"
            style={{backgroundColor: profileButtonColor}}
          >
            <IconFax/>
          </div>
          <div className=
                 {
                   `flex-grow
                ${
                     themeColor === 'light' ? 'text-black' : 'text-white'
                   }
                text-base font-light`
                 }
          >
            {profile.profile_company_fax}
          </div>
        </div>
      )}

      {profile.profile_company_email && (
        <div className="flex items-center space-x-4 mb-3">
          <a href={`mailto:${profile.profile_company_email}`} className="flex items-center space-x-4">
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
              {profile.profile_company_email}
            </div>
          </a>
        </div>
      )}

      {profile.profile_company_pec && (
        <div className="flex items-center space-x-4 mb-3">
          <a href={`mailto:${profile.profile_company_pec}`} className="flex items-center space-x-4">
            <div
              className="flex-shrink-0 rounded-full flex items-center justify-center w-12 h-12"
              style={{backgroundColor: profileButtonColor}}
            >
              <IconPec/>
            </div>
            <div className={
              `flex-grow
        ${themeColor === 'light' ? 'text-black' : 'text-white'}
        text-base font-light`
            }>
              {profile.profile_company_pec}
            </div>
          </a>
        </div>
      )}

      {profile.profile_company_sdi && (
        <p className={`font-light text-base ps-text-${themeColor}`}>{translations.be_sdi}: {profile.profile_company_sdi}</p>
      )}
      {profile.profile_company_vat && (
        <p className={`font-light text-base ps-text-${themeColor}`}>{translations.be_vat}: {profile.profile_company_vat}</p>
      )}
      {profile.profile_company_cf && (
        <p className={`font-light text-base ps-text-${themeColor}`}>{translations.be_tax_code}: {profile.profile_company_cf}</p>
      )}

    </>
  );
};

export default CompanyInfoProfileFE;
