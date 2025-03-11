import Logo from "../../../public/images/logo-fallback-taptie.png";
import React, {useCallback, useState} from "react";
import SidebarProfileFE from "@/Components/SidebarProfileFE.jsx";
import {CardsQrCodeModalFE} from "@/Partials/Cards/CardsQrCodeModalFE.jsx";
import ProfileAccordionFE from "@/Partials/Profile/ProfileAccordionFE.jsx";

export default function HeroTemplate({ card, themeColor, profile, profileButtonColor, profileLinkColor, user, baseUrl }) {

  const handleDownload = () => {

    let cover = '';
    let photoType = 'JPEG';

    let current_url = window.location.href;

    if (profile.profile_theme_type === 'hero' && profile.profile_img_cover_hero !== '/storage/') {
      cover =  `${baseUrl}/${profile.profile_img_cover_hero}`;
    } else {
      cover = "https://via.placeholder.com/150";
    }

    if (cover.endsWith('.png')) {
      photoType = 'PNG';
    }else if (cover.endsWith('.jpg')){
      photoType = 'JPG';
    }

    const vCardData = [
      'BEGIN:VCARD',
      'VERSION:3.0',
      `N:${profile.profile_lastname};${profile.profile_name};;;`,
      `FN:${profile.profile_name} ${profile.profile_lastname}`,
      `TEL;TYPE=CELL:${profile.profile_mobile_phone}`,
      `TEL;TYPE=HOME:${profile.profile_phone}`,
      `TEL;TYPE=WORK:${profile.profile_company_phone}`,
      `EMAIL;TYPE=INTERNET:${profile.profile_email}`,
      `EMAIL;TYPE=WORK:${profile.profile_company_email}`,
      `ADR;TYPE=WORK:;;${profile.profile_company_name}, ${profile.profile_company_first_address}, ${profile.profile_zipcode} ${profile.profile_city}, ${profile.profile_province}, ${profile.profile_country}`,
      `ORG:${profile.profile_company_name}`,
      `TITLE:${profile.profile_role}`,
      `PHOTO;ENCODING=b;TYPE=${photoType}:${profile.image_vcard}`,
      `URL;TYPE=TCard:${current_url}`,
      'END:VCARD'
    ].join('\n');

    const blob = new Blob([vCardData], { type: 'text/vcard;charset=utf-8' });
    const url = URL.createObjectURL(blob);

    const a = document.createElement('a');
    a.href = url;
    a.download = `vCard_${profile.profile_name}_${profile.profile_lastname}.vcf`;
    a.click();

    URL.revokeObjectURL(url);
  };

  const IconLogin = () => (
    <svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 26 27">
      <defs>
        <clipPath id="clip-path">
          <rect id="Rettangolo_905" data-name="Rettangolo 905" width="26" height="27" transform="translate(0 0.15)"/>
        </clipPath>
      </defs>
      <g id="Raggruppa_535" data-name="Raggruppa 535" transform="translate(0.176 0.174)">
        <g id="Raggruppa_534" data-name="Raggruppa 534" transform="translate(-0.176 -0.324)" clipPath="url(#clip-path)">
          <path id="Tracciato_1045" data-name="Tracciato 1045"
                d="M13.153,13.153a6.334,6.334,0,0,1-4.645-1.932A6.334,6.334,0,0,1,6.577,6.577,6.334,6.334,0,0,1,8.509,1.932,6.334,6.334,0,0,1,13.153,0,6.334,6.334,0,0,1,17.8,1.932,6.334,6.334,0,0,1,19.73,6.577,6.334,6.334,0,0,1,17.8,11.221a6.334,6.334,0,0,1-4.645,1.932M0,26.306V21.7a4.9,4.9,0,0,1,2.631-4.357A24.421,24.421,0,0,1,7.81,15.434a22.755,22.755,0,0,1,10.687,0,24.421,24.421,0,0,1,5.179,1.912A4.9,4.9,0,0,1,26.306,21.7v4.6Zm3.288-3.288h19.73V21.7a1.556,1.556,0,0,0-.225-.822,1.6,1.6,0,0,0-.6-.575,21.424,21.424,0,0,0-4.48-1.666,19.062,19.062,0,0,0-9.125,0,21.425,21.425,0,0,0-4.48,1.666,1.6,1.6,0,0,0-.6.575,1.556,1.556,0,0,0-.225.822ZM13.153,9.865A3.173,3.173,0,0,0,15.476,8.9a3.173,3.173,0,0,0,.965-2.323,3.173,3.173,0,0,0-.965-2.323,3.279,3.279,0,0,0-4.646,0,3.173,3.173,0,0,0-.965,2.323A3.173,3.173,0,0,0,10.83,8.9a3.173,3.173,0,0,0,2.323.965"
                transform="translate(0.229 0.421)" fill="white"/>

        </g>
      </g>
    </svg>
  );

  const IconMenu = () => (
    <svg
      xmlns="http://www.w3.org/2000/svg"
      width="20"
      height="13.333"
      viewBox="0 0 20 13.333"
    >
      <path
        d="M0,13.333H20V11.111H0ZM0,7.778H20V5.556H0ZM0,2.222H20V0H0Z"
        fill="white"
      />
    </svg>
  );

  const IconQrCode = ({}) => (

    <svg xmlns="http://www.w3.org/2000/svg" width="26.428" height="26.428" viewBox="0 0 26.428 26.428">
      <g id="Raggruppa_816" data-name="Raggruppa 816" transform="translate(1558.214 493.214)">
        <path id="Tracciato_1043" data-name="Tracciato 1043"
              d="M23.491,26.428h2.936V23.491H23.491Zm-8.809-2.936h2.936V20.555H14.682Zm8.809-5.873v2.936H20.555v2.936H17.618v2.936h2.936V23.491h2.936V20.555h2.936V17.618Zm-20.555,0H8.811v5.874H2.936ZM0,26.428H11.746V14.682H0Zm14.682-8.809h2.936V14.682H14.682Zm5.873-2.936v2.936H17.618v2.936h2.936V17.618h2.936V14.682ZM2.936,2.936H8.811V8.811H2.936ZM0,11.746H11.746V0H0ZM17.618,2.936h5.874V8.811H17.618Zm-2.936,8.809H26.428V0H14.682Z"
              transform="translate(-1558.214 -493.214)"
              fill={"white"}
        />
      </g>
    </svg>

  );

  const IconVCard = () => (
    <svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30">
      <defs>
        <clipPath id="clip-path">
          <rect id="Rettangolo_904" data-name="Rettangolo 904" width="30" height="30" transform="translate(0.136 0.136)"/>
        </clipPath>
      </defs>
      <g id="Raggruppa_815" data-name="Raggruppa 815" transform="translate(1629 497)">
        <g id="Raggruppa_533" data-name="Raggruppa 533" transform="translate(-1629.136 -497.136)">
          <g id="Raggruppa_532" data-name="Raggruppa 532" clipPath="url(#clip-path)">
            <path id="Tracciato_1044" data-name="Tracciato 1044"
                  d="M3.027,30.271a2.921,2.921,0,0,1-2.139-.888A2.921,2.921,0,0,1,0,27.244V10.6A2.921,2.921,0,0,1,.888,8.456a2.921,2.921,0,0,1,2.139-.888H10.6V3.027A2.921,2.921,0,0,1,11.483.888,2.921,2.921,0,0,1,13.622,0h3.027a2.921,2.921,0,0,1,2.139.888,2.921,2.921,0,0,1,.888,2.139V7.568h7.568A3.033,3.033,0,0,1,30.271,10.6V27.244a3.033,3.033,0,0,1-3.027,3.027Zm0-3.027H27.244V10.6H19.676a3.033,3.033,0,0,1-3.027,3.027H13.622A3.033,3.033,0,0,1,10.6,10.6H3.027Zm3.027-3.027h9.081v-.681a2.13,2.13,0,0,0-.36-1.193,2.376,2.376,0,0,0-1-.851,7.79,7.79,0,0,0-1.533-.51,8,8,0,0,0-3.291,0,7.79,7.79,0,0,0-1.533.51,2.376,2.376,0,0,0-1,.851,2.13,2.13,0,0,0-.36,1.193Zm12.109-2.27h6.054v-2.27H18.163ZM10.6,19.676A2.27,2.27,0,1,0,8.986,15.8,2.27,2.27,0,0,0,10.6,19.676m7.568-2.27h6.054v-2.27H18.163ZM13.622,10.6h3.027V3.027H13.622Z"
                  transform="translate(0 0)"
                  fill={"white"}
            />
          </g>
        </g>
      </g>
    </svg>
  );

  const IconArrowBottom = () => (
    <svg xmlns="http://www.w3.org/2000/svg" width="19.088" height="11.772" viewBox="0 0 19.088 11.772">
      <path id="Tracciato_1296" data-name="Tracciato 1296" d="M16.863,0,9.545,7.318,2.227,0,0,2.226l9.545,9.546,9.543-9.546Z"
            transform="translate(0 0)"
            fill={`${ themeColor === 'light' ? 'black' : 'white'}`}
      />
    </svg>
  );

  const IconOpenLeadForm = () => (
    <svg id="Raggruppa_1112" data-name="Raggruppa 1112" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink"
         width="39.458" height="35.855" viewBox="0 0 39.458 35.855">
      <defs>
        <clipPath id="clip-path">
          <rect id="Rettangolo_1460" data-name="Rettangolo 1460" width="39.459" height="35.855"/>
        </clipPath>
      </defs>
      <g id="Raggruppa_1112-2" data-name="Raggruppa 1112" clipPath="url(#clip-path)">
        <path id="Tracciato_2149" data-name="Tracciato 2149"
              d="M19.514,32.27a.8.8,0,0,0,.359-.09A1.022,1.022,0,0,0,20.141,32l14.7-14.7a3.3,3.3,0,0,0,.783-1.21,3.87,3.87,0,0,0,.247-1.345,3.814,3.814,0,0,0-.247-1.368,2.947,2.947,0,0,0-.783-1.142L27.223,4.616a2.971,2.971,0,0,0-1.142-.785,3.852,3.852,0,0,0-1.368-.246,3.909,3.909,0,0,0-1.345.246,3.323,3.323,0,0,0-1.21.785l-.493.493,3.317,3.361A3.866,3.866,0,0,1,25.968,9.9a4.647,4.647,0,0,1,.314,1.7,4.363,4.363,0,0,1-4.437,4.437,4.818,4.818,0,0,1-1.725-.314,4.083,4.083,0,0,1-1.458-.941L15.3,11.474,7.458,19.317a.9.9,0,0,0-.2.29.851.851,0,0,0-.068.337.941.941,0,0,0,.269.651.831.831,0,0,0,.627.29.8.8,0,0,0,.359-.09,1.022,1.022,0,0,0,.269-.179l6.1-6.1,2.51,2.51-6.051,6.1a.889.889,0,0,0-.2.292.836.836,0,0,0-.068.335.919.919,0,0,0,.9.9.8.8,0,0,0,.359-.09,1.022,1.022,0,0,0,.269-.179l6.1-6.051,2.51,2.51-6.051,6.1a.534.534,0,0,0-.2.269,1.055,1.055,0,0,0-.066.359.919.919,0,0,0,.9.9.807.807,0,0,0,.335-.068.889.889,0,0,0,.292-.2l6.1-6.051,2.51,2.51-6.1,6.1a.931.931,0,0,0-.2.29.834.834,0,0,0,.224.965.934.934,0,0,0,.649.269m-.045,3.586a4.361,4.361,0,0,1-2.935-1.1A4.264,4.264,0,0,1,15.032,32a4.407,4.407,0,0,1-3.81-3.81,4.247,4.247,0,0,1-2.531-1.278,4.55,4.55,0,0,1-1.233-2.531A4.259,4.259,0,0,1,4.679,22.9,4.4,4.4,0,0,1,3.6,19.944a4.545,4.545,0,0,1,.335-1.725A4.347,4.347,0,0,1,4.9,16.762L15.3,6.409l5.871,5.871a.531.531,0,0,0,.269.2.978.978,0,0,0,.359.068.962.962,0,0,0,.672-.246.843.843,0,0,0,.269-.651,1.055,1.055,0,0,0-.066-.359.544.544,0,0,0-.2-.269L16.063,4.616a2.964,2.964,0,0,0-1.144-.785,3.835,3.835,0,0,0-1.366-.246,3.909,3.909,0,0,0-1.345.246A3.323,3.323,0,0,0,11,4.616L4.679,10.981a3.589,3.589,0,0,0-.672.941A3.78,3.78,0,0,0,3.648,13a3.424,3.424,0,0,0,0,1.1,3.239,3.239,0,0,0,.359,1.052l-2.6,2.6a7.084,7.084,0,0,1-.762-7.194A7.19,7.19,0,0,1,2.124,8.426L8.444,2.106a7.573,7.573,0,0,1,2.4-1.569,7.152,7.152,0,0,1,7.775,1.569l.493.493.493-.493A7.573,7.573,0,0,1,22,.538a7.152,7.152,0,0,1,7.775,1.569l7.574,7.574a7.01,7.01,0,0,1,1.569,2.375,7.3,7.3,0,0,1,.538,2.734,7.18,7.18,0,0,1-2.106,5.065l-14.7,14.656a4.633,4.633,0,0,1-1.458.986,4.309,4.309,0,0,1-1.725.359"
              transform="translate(0)"
              fill={"white"}
        />
      </g>
    </svg>

  );

  const IconFooterLogoLight = () => (

    <img
      className={`w-16 ml-1 -mt-2.5`}
      src={"/images/logo-teikei-dark.png"}
    />

  );

  const IconFooterLogoDark = () => (

    <img
      className={`w-16 ml-1 -mt-2.5`}
      src={"/images/logo-teikei-white.png"}
    />

  );

  const [isSidebarProfileOpen, setSidebarProfileOpen] = useState(false);

  const handleOpenSidebarProfile = useCallback(() => {
    setSidebarProfileOpen(true);
  }, []);

  const handleCloseSidebarProfile = useCallback(() => {
    setSidebarProfileOpen(false);
  }, []);

  const [modals, setModals] = useState({
    qrCodeModal: { isOpen: false, card: null },
  });

  const openQrCodeModal = useCallback((card) => {
    setModals((prevModals) => ({
      ...prevModals,
      qrCodeModal: { isOpen: true, card },
    }));
  }, []);

  const closeModal = useCallback((modalName) => {
    setModals((prevModals) => ({
      ...prevModals,
      [modalName]: { isOpen: false, cards: [], card: null },
    }));
  }, []);

  const showQrCodeModal = (card) => {
    openQrCodeModal(card);
  }

  const showLeadForm = (card) => {
    const url = route('lead.create', { card_id: card.id });
    window.open(url, '_blank');
  }

  const profileCoverImage = () => {
    if (profile.profile_theme_type === 'hero' && profile.profile_img_cover_hero !== '/storage/') {
      return profile.profile_img_cover_hero;
    } else {
      return "https://via.placeholder.com/150";
    }
  };

  return (
    <>
      <div className={`hero-template ${themeColor} h-full`}>

        <div className={"ps-header-fe p-8 relative z-10"}>
          <aside
            className={"flex ml-auto flex-row transition-width bg-transparent z-10"}
          >
            <div
              className={"flex gap-3"}>
              <div className="flex -ml-[4px] rounded-full">
                <img src={profile.profile_company_logo ? profile.profile_company_logo : Logo} alt="Logo" className="w-16 rounded-full"/>
              </div>
            </div>
            {user && (<div
                className={"ml-auto flex flex-col"}>
              <div className="flex items-center justify-center rounded-full">
                  <button
                    onClick={handleOpenSidebarProfile}
                    className="w-10 h-10 rounded-full flex items-center justify-center"
                    style={{backgroundColor: profileButtonColor}}
                  >
                    <IconMenu />
                  </button>
                </div>
              </div>
            )}
          </aside>
        </div>

        <div className={"ps-container-fe"}>

          <div className={`relative overflow-hidden -mt-32 mx-auto z-1`}>
            <div
              className={`absolute bottom-0 left-0 right-0 h-96 ${themeColor === 'light' ? 'bg-gradient-to-t from-white to-transparent' : 'bg-gradient-to-t from-black to-transparent'}`}
            />
            <img
              src={profileCoverImage()}
              alt={`${profile.profile_name} ${profile.profile_lastname}`}
              className="max-h-full w-full"
            />
          </div>

          <div className={"relative pl-8 pr-8 -mt-48"}>
            <p className={`font-medium text-2xl leading-4 ps-text-${themeColor}`}>{profile.profile_title}</p>
            <p className={`font-medium text-3xl ps-text-${themeColor}`}>{profile.profile_name} {profile.profile_lastname}</p>
            <p className={`font-medium text-base ps-text-${themeColor}`}>{profile.profile_role}</p>
            <p className={`font-medium text-lg ps-text-${themeColor}`}>@ {profile.profile_company_name}</p>
          </div>

          <div className="relative flex gap-3 mt-4 pl-8 pr-8 z-10">
            <button
              onClick={handleDownload}
              className="w-40  h-16 rounded-full flex items-center justify-center"
              style={{backgroundColor: profileButtonColor}}
            >
              <IconVCard/>
              <div className="text-left text-white ml-2 text-base leading-tight	">
                Download
                <br/>
                vCard
              </div>
            </button>
            <button
              onClick={() => showQrCodeModal(card)}
              className="w-16 h-16 rounded-full flex items-center justify-center"
              style={{backgroundColor: profileButtonColor}}
            >
              <IconQrCode/>
            </button>
            <button
              onClick={() => showLeadForm(card)}
              className="w-16 h-16 rounded-full flex items-center justify-center"
              style={{backgroundColor: profileButtonColor}}
            >
              <IconOpenLeadForm/>
            </button>
          </div>

          <div className="flex items-center justify-center gap-3 mt-7 mb-20 pl-8 pr-8">
            <IconArrowBottom/>
          </div>

          <div className="flex flex-wrap gap-2 pl-8 pr-8">
            {profile.social_networks.map((social) => {

              const iconName = `icon-social-${social.social_network_name.toLowerCase()}.svg`;
              const iconPath = `/icons/svg/${iconName}`;

              return (
                <a
                  key={social.social_network_name}
                  href={social.social_network_url}
                  target="_blank"
                  rel="noopener noreferrer"
                  className="w-16 h-16 rounded-full flex items-center justify-center"
                  style={{backgroundColor: profileButtonColor}}
                >
                  <img
                    src={iconPath}
                    alt={social.social_network_name}
                    className="w-8 h-8 svg-icon"
                    style={{fill: 'white'}}
                  />
                </a>
              );
            })}
          </div>

          <div className={"flex gab-3 mt-12 pl-8 pr-8"}>
            <ProfileAccordionFE
              profile={profile}
              themeColor={themeColor}
              profileButtonColor={profileButtonColor}
              profileLinkColor={profileLinkColor}
              card={card}
            />
          </div>

        </div>

        <hr className={"m-8"}/>

        <div className={"ps-footer-fe pl-8 pr-8 pb-8 mt-4 flex ml-auto flex-row"}>

          <div className={"flex flex-col"}>
            <p className={`ps-text-${themeColor} font-light text-base flex items-center`}>
              Powered by {themeColor === 'dark' ? <IconFooterLogoDark /> : <IconFooterLogoLight />}
            </p>
            <p className={"font-light"}><a target={"_blank"} href="https://www.iubenda.com/privacy-policy/20114804"
                                           style={{color: profileLinkColor}}>Privacy Policy</a></p>
          </div>
          {!user && (
            <div className={"ml-auto flex flex-col"}>
              <div className="flex items-center justify-center rounded-full">
                <button
                  onClick={handleOpenSidebarProfile}
                  className="w-10 h-10 rounded-full flex items-center justify-center" style={{backgroundColor: "#424242"}}
                >
                  <IconLogin/>
                </button>
              </div>
            </div>)}
        </div>

      </div>

      <SidebarProfileFE
        isOpen={isSidebarProfileOpen}
        onClose={handleCloseSidebarProfile}
        user={user}
        profile={profile}
        card={card}
      />

      <CardsQrCodeModalFE
        card={modals.qrCodeModal.card}
        onClose={() => closeModal('qrCodeModal')}
        baseUrl = {baseUrl}
        themeColor = {themeColor}
        profileButtonColor = {profileButtonColor}
      />

      {isSidebarProfileOpen && <div className="fixed inset-0" onClick={handleCloseSidebarProfile}></div>}

    </>
  );
}
