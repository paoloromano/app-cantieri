import React, { useEffect } from 'react';
import {Accordion, AccordionItem, Button, Popover, PopoverContent, PopoverTrigger} from "@nextui-org/react";
import CompanyInfoProfileFE from "@/Partials/Profile/CompanyInfoProfileFE.jsx";
import BioProfileFE from "@/Partials/Profile/BioProfileFE.jsx";
import ContactsProfileFE from "@/Partials/Profile/ContactsProfileFE.jsx";
import DocumentsProfileFE from "@/Partials/Profile/DocumentsProfileFE.jsx";
import VideoProfileFE from "@/Partials/Profile/VideoProfileFE.jsx";
import ImagesProfileFE from "@/Partials/Profile/ImagesProfileFE.jsx";
import LinksProfileFE from "@/Partials/Profile/LinksProfileFE.jsx";

const ProfileAccordionFE = ({ profile, themeColor, profileButtonColor, profileLinkColor, card }) => {

  const translations = card.translations;

  const IconPlus = () => (

    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
      <path id="Tracciato_1294" data-name="Tracciato 1294" d="M6,0V6H0V8H6v6H8V8h6V6H8V0Z" transform="translate(0 0)"
            fill={profileButtonColor}
      />
    </svg>

  );

  const IconMinus = () => (
    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="2" viewBox="0 0 14 2">
      <rect id="Rettangolo_1255" data-name="Rettangolo 1255" width="14" height="2" fill={profileButtonColor}/>
    </svg>

  );


  const itemClasses = {
    base: "",
    title: "font-normal text-2xl",
    trigger: "",
    content: "mb-6",
  };

  const variableMapping = [
    { key: 1, value: profile.is_company_collapsed},
    { key: 2, value: profile.is_bio_collapsed },
    { key: 3, value: profile.is_contacts_collapsed },
    { key: 4, value: profile.is_documents_collapsed },
    { key: 5, value: profile.is_videos_collapsed },
    { key: 6, value: profile.is_images_collapsed },
    { key: 7, value: profile.is_links_collapsed },
  ];

  const defaultExpandedKeys = variableMapping
    .filter(variable => variable.value === 0)
    .map(variable => variable.key.toString());

  return (
    <Accordion
      selectionMode="multiple"
      showDivider={false}
      defaultExpandedKeys={defaultExpandedKeys}
      itemClasses={itemClasses}
      disableIndicatorAnimation={true}
      isCompact={true}
    >
      <AccordionItem
        key="1" aria-label="company"
        title={
          <div className="flex items-center" >
            <span className="mr-2">{translations.be_company}</span>
          </div>
        }
        indicator={({ isOpen }) => (isOpen ?
          <IconMinus /> : <IconPlus />)}>
        <CompanyInfoProfileFE
          profile={profile}
          themeColor={themeColor}
          profileButtonColor={profileButtonColor}
          profileLinkColor={profileLinkColor}
          translations={translations}
        />
      </AccordionItem>

      <AccordionItem key="2" aria-label="bio" title={translations.be_bio} indicator={({ isOpen }) => (isOpen ?
        <IconMinus /> : <IconPlus />)}>
        <BioProfileFE
          profile={profile}
          themeColor={themeColor}
          profileButtonColor={profileButtonColor}
          profileLinkColor={profileLinkColor}
        />
      </AccordionItem>

      <AccordionItem key="3" aria-label="contacts" title={translations.be_contacts} indicator={({ isOpen }) => (isOpen ?
        <IconMinus /> : <IconPlus />)}>
        <ContactsProfileFE
          profile={profile}
          themeColor={themeColor}
          profileButtonColor={profileButtonColor}
          profileLinkColor={profileLinkColor}
        />
      </AccordionItem>

      <AccordionItem
        key="4"
        aria-label="documents"
        title={
          <div className="flex items-center" >
            <span className="mr-2">{translations.be_documents}</span>
          </div>
        }
        indicator={({ isOpen }) => (isOpen ?
          <IconMinus /> : <IconPlus />)}>
        <DocumentsProfileFE
          profile={profile}
          themeColor={themeColor}
          profileButtonColor={profileButtonColor}
          profileLinkColor={profileLinkColor}
        />
      </AccordionItem>

      <AccordionItem key="5" aria-label="videos" title={translations.be_videos} indicator={({ isOpen }) => (isOpen ?
        <IconMinus /> : <IconPlus />)}>
        <VideoProfileFE
          profile={profile}
          themeColor={themeColor}
          profileButtonColor={profileButtonColor}
          profileLinkColor={profileLinkColor}
        />
      </AccordionItem>


      <AccordionItem
        key="6"
        aria-label="images"
        title={
          <div className="flex items-center" >
            <span className="mr-2">{translations.be_images}</span>
          </div>
        }
        indicator={({ isOpen }) => (isOpen ?
          <IconMinus /> : <IconPlus />)}>
        <ImagesProfileFE
          profile={profile}
          themeColor={themeColor}
          profileButtonColor={profileButtonColor}
          profileLinkColor={profileLinkColor}
        />
      </AccordionItem>

      <AccordionItem key="7" aria-label="links" title={translations.be_links} indicator={({ isOpen }) => (isOpen ?
        <IconMinus /> : <IconPlus />)}>
        <LinksProfileFE
          profile={profile}
          themeColor={themeColor}
          profileButtonColor={profileButtonColor}
          profileLinkColor={profileLinkColor}
        />
      </AccordionItem>

    </Accordion>
  );
};

export default ProfileAccordionFE;
