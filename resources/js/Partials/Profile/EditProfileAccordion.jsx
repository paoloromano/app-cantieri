import React, { useEffect } from 'react';
import {Accordion, AccordionItem, Popover, PopoverContent, PopoverTrigger} from "@nextui-org/react";
import CloseAccordionIcon from "../../../../public/icons/png/icon-minus-blu.png";
import OpenAccordionIcon from "../../../../public/icons/png/icon-plus-blu.png";
import EditBasicallyInfoProfile from "@/Partials/Profile/EditBasicallyInfoProfile.jsx";
import EditAppearanceProfile from "@/Partials/Profile/EditAppearanceProfile.jsx";
import EditCompanyInfoProfile from "@/Partials/Profile/EditCompanyInfoProfile.jsx";
import EditBioProfile from "@/Partials/Profile/EditBioProfile.jsx";
import EditContactsProfile from "@/Partials/Profile/EditContactsProfile.jsx";
import EditVideoProfile from "@/Partials/Profile/EditVideoProfile.jsx";
import EditDocumentsProfile from "@/Partials/Profile/EditDocumentsProfile.jsx";
import EditSocialsProfile from "@/Partials/Profile/EditSocialsProfile.jsx";
import EditLinksProfile from "@/Partials/Profile/EditLinksProfile.jsx";
import EditImagesProfile from "@/Partials/Profile/EditImagesProfile.jsx";
import EditCoverImageProfile from "@/Partials/Profile/EditCoverImageProfile.jsx";
import IconTooltip from "../../../../public/icons/png/icon-tooltip.png";

const EditProfileAccordion = ({ card, profile_id }) => {

  const [activeProfile, setActiveProfile] = React.useState(null);

  const translations = card.translations;

  useEffect(() => {
    if (profile_id) {
      const newActiveProfile = card.profiles.find(profile => profile.id == profile_id);
      setActiveProfile(newActiveProfile);
    }
  }, [profile_id, card.profiles]);

  const itemClasses = {
    base: "",
    title: "font-normal text-2xl",
    trigger: "",
    content: "",
  };

  const defaultExpandedKeys = ["1", "2"];

  return (
    <Accordion
      selectionMode="multiple"
      defaultExpandedKeys={defaultExpandedKeys}
      itemClasses={itemClasses}
      disableIndicatorAnimation={true}
      isCompact={true}
    >
      <AccordionItem key="1" aria-label="info" title={translations.be_basic_info} indicator={({ isOpen }) => (isOpen ?
        <img className={"w-8 h-8"} src={CloseAccordionIcon} /> : <img className={"w-8 h-8"} src={OpenAccordionIcon} />)}>
        <EditBasicallyInfoProfile profile={activeProfile} translations={translations} />
      </AccordionItem>

      <AccordionItem key="2" aria-label="appearance" title={translations.be_appearance} indicator={({ isOpen }) => (isOpen ?
        <img className={"w-8 h-8"} src={CloseAccordionIcon} /> : <img className={"w-8 h-8"} src={OpenAccordionIcon} />)}>
        <EditAppearanceProfile profile={activeProfile} translations={translations}  />
      </AccordionItem>

      <AccordionItem key="3" aria-label="images" title={translations.be_image} indicator={({ isOpen }) => (isOpen ?
        <img className={"w-8 h-8"} src={CloseAccordionIcon} /> : <img className={"w-8 h-8"} src={OpenAccordionIcon} />)}>
        <EditCoverImageProfile profile={activeProfile} translations={translations}  />
      </AccordionItem>

      <AccordionItem key="4" aria-label="socials" title="Social Network" indicator={({ isOpen }) => (isOpen ?
        <img className={"w-8 h-8"} src={CloseAccordionIcon} /> : <img className={"w-8 h-8"} src={OpenAccordionIcon} />)}>
        <EditSocialsProfile profile={activeProfile} translations={translations} />
      </AccordionItem>

      <AccordionItem
        key="5" aria-label="company"
        title={
          <div className="flex items-center" >
            <span className="mr-2">{translations.be_company}</span>
            <Popover
              showArrow
              placement="bottom"
              classNames={{
                base: [
                  // arrow color
                  "before:bg-primary"
                ],
                content: [
                  "py-3 px-4 bg-primary text-white",
                ],
              }}
            >
              <PopoverTrigger>
                <span className="flex items-center p-0 bg-transparent text-2xl font-light ps-font-color">
                  <img src={IconTooltip} alt="Save" className="size-6"/>
                </span>
              </PopoverTrigger>
              <PopoverContent>
                {(titleProps) => (
                  <div className="text-white">
                    {/*<div className="text-small">Immagine profilo Azienda</div>
                    <div className="text-small">Dimensione > 1:1 (quadrata)</div>
                    <div className="text-small">Formato: JPG o PNG</div>*/}
                    <div className="text-small w-60">{translations.be_company_logo_instruction}</div>
                  </div>
                )}
              </PopoverContent>
            </Popover>
          </div>
        }
        indicator={({ isOpen }) => (isOpen ?
        <img className={"w-8 h-8"} src={CloseAccordionIcon} /> : <img className={"w-8 h-8"} src={OpenAccordionIcon} />)}>
        <EditCompanyInfoProfile profile={activeProfile}  translations={translations} />
      </AccordionItem>

      <AccordionItem key="6" aria-label="bio" title={translations.be_bio} indicator={({ isOpen }) => (isOpen ?
        <img className={"w-8 h-8"} src={CloseAccordionIcon} /> : <img className={"w-8 h-8"} src={OpenAccordionIcon} />)}>
        <EditBioProfile profile={activeProfile}  translations={translations} />
      </AccordionItem>

      <AccordionItem key="7" aria-label="contacts" title={translations.be_contacts} indicator={({ isOpen }) => (isOpen ?
        <img className={"w-8 h-8"} src={CloseAccordionIcon} /> : <img className={"w-8 h-8"} src={OpenAccordionIcon} />)}>
        <EditContactsProfile profile={activeProfile} translations={translations}  />
      </AccordionItem>

      <AccordionItem
        key="8"
        aria-label="documents"
        title={
          <div className="flex items-center" >
            <span className="mr-2">{translations.be_documents}</span>
            <Popover
              showArrow
              placement="bottom"
              classNames={{
                base: [
                  // arrow color
                  "before:bg-primary"
                ],
                content: [
                  "py-3 px-4 bg-primary text-white",
                ],
              }}
            >
              <PopoverTrigger>
                <span className="flex items-center p-0 bg-transparent text-2xl font-light ps-font-color">
                  <img src={IconTooltip} alt="Save" className="size-6"/>
                </span>
              </PopoverTrigger>
              <PopoverContent>
                {(titleProps) => (
                  <div className="text-white">
                    {/*<div className="text-small">Peso documenti > 8Mb max</div>
                    <div className="text-small">Formato: DOC o PDF</div>*/}
                    <div className="text-small">{translations.be_documents_instruction}</div>
                  </div>
                )}
              </PopoverContent>
            </Popover>
          </div>
        }
        indicator={({ isOpen }) => (isOpen ?
        <img className={"w-8 h-8"} src={CloseAccordionIcon} /> : <img className={"w-8 h-8"} src={OpenAccordionIcon} />)}>
        <EditDocumentsProfile profile={activeProfile} translations={translations}  />
      </AccordionItem>

      <AccordionItem key="9" aria-label="videos" title={translations.be_videos} indicator={({ isOpen }) => (isOpen ?
        <img className={"w-8 h-8"} src={CloseAccordionIcon} /> : <img className={"w-8 h-8"} src={OpenAccordionIcon} />)}>
        <EditVideoProfile profile={activeProfile} translations={translations}  />
      </AccordionItem>

      <AccordionItem
        key="10"
        aria-label="images"
        title={
          <div className="flex items-center" >
            <span className="mr-2">{translations.be_images}</span>
            <Popover
              showArrow
              placement="bottom"
              classNames={{
                base: [
                  // arrow color
                  "before:bg-primary"
                ],
                content: [
                  "py-3 px-4 bg-primary text-white",
                ],
              }}
            >
              <PopoverTrigger>
                <span className="flex items-center p-0 bg-transparent text-2xl font-light ps-font-color">
                  <img src={IconTooltip} alt="Save" className="size-6"/>
                </span>
              </PopoverTrigger>
              <PopoverContent>
                {(titleProps) => (
                  <div className="text-white">
                    {/*<div className="text-small">Peso immagine > 5Mb max</div>
                    <div className="text-small">Formato: JPG o PNG</div>*/}
                    <div className="text-small">{translations.be_images_instruction}</div>
                  </div>
                )}
              </PopoverContent>
            </Popover>
          </div>
        }
        indicator={({ isOpen }) => (isOpen ?
        <img className={"w-8 h-8"} src={CloseAccordionIcon} /> : <img className={"w-8 h-8"} src={OpenAccordionIcon} />)}>
        <EditImagesProfile profile={activeProfile} translations={translations}  />
      </AccordionItem>

      <AccordionItem key="11" aria-label="links" title={translations.be_links} indicator={({ isOpen }) => (isOpen ?
        <img className={"w-8 h-8"} src={CloseAccordionIcon} /> : <img className={"w-8 h-8"} src={OpenAccordionIcon} />)}>
        <EditLinksProfile profile={activeProfile} translations={translations}  />
      </AccordionItem>

    </Accordion>
  );
};

export default EditProfileAccordion;
