import {Head, Link, router, usePage} from "@inertiajs/react";
import AuthenticatedCardRoleLayout from "@/Layouts/AuthenticatedCardRoleLayout.jsx";
import {Button, Spacer} from "@nextui-org/react";
import React from "react";
import iconBack from "../../../../public/icons/png/icon-back.png"
import {trans} from "matice";


export default function Edit({ card }) {

  const activeProfile = card.profiles?.find(profile => profile.active === 1);

  const translations = card.translations;

  const { props } = usePage();
  const user = props.auth.user;

  const profileCoverImage = () => {
    if (activeProfile.profile_theme_type === 'hero' && activeProfile.profile_img_cover_hero !== '/storage/') {
      return activeProfile.profile_img_cover_hero;
    } else if (activeProfile.profile_theme_type === 'balloon' && activeProfile.profile_img_cover_balloon !== '/storage/') {
      return activeProfile.profile_img_cover_balloon;
    } else {
      return "https://via.placeholder.com/150";
    }
  };

  const handleWallet = (id) => {

    const userAgent = navigator.userAgent;
    const isAppleDevice = /iPhone|iPad|iPod|Macintosh/.test(userAgent);
    const isSafari = /^((?!chrome|android|crios).)*safari/i.test(userAgent);
    const isChromeiOS = /CriOS/.test(userAgent);

    axios.get(`/card/${id}/wallet`)
      .then((response) => {
        if (response.data.success) {
          if (isAppleDevice && isSafari) {
            window.location.href = response.data.url;
          } else if (isAppleDevice && isChromeiOS) {
            alert("Please use Safari to add this card to your Apple Wallet.");
          } else {
            alert("Open the file and add your card to your wallet!");
            window.location.href = response.data.url;
          }
        }
      })
      .catch((error) => {
        console.error("Error downloading the wallet file:", error);
      });
  };

  const IconWallet = () => (
    <svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" width="31" height="25" viewBox="0 0 31 25">
      <defs>
        <clipPath id="clip-path">
          <rect id="Rettangolo_1481" data-name="Rettangolo 1481" width="31" height="25" transform="translate(0 -0.145)"/>
        </clipPath>
      </defs>
      <g id="Raggruppa_1169" data-name="Raggruppa 1169" transform="translate(0 0.146)">
        <g id="Raggruppa_1155" data-name="Raggruppa 1155" clipPath="url(#clip-path)">
          <path id="Tracciato_2162" data-name="Tracciato 2162"
                d="M6.214,24.855a5.985,5.985,0,0,1-4.388-1.825A5.985,5.985,0,0,1,0,18.641V6.214A5.985,5.985,0,0,1,1.825,1.825,5.985,5.985,0,0,1,6.214,0H24.855a5.985,5.985,0,0,1,4.388,1.825,5.985,5.985,0,0,1,1.825,4.388V18.641a6.232,6.232,0,0,1-6.214,6.214Zm0-18.641H24.855a6.721,6.721,0,0,1,1.631.194,5.272,5.272,0,0,1,1.476.621V6.214a3,3,0,0,0-.912-2.195,3,3,0,0,0-2.195-.912H6.214a3,3,0,0,0-2.195.912,3,3,0,0,0-.912,2.195v.816a5.272,5.272,0,0,1,1.476-.621,6.721,6.721,0,0,1,1.631-.194M3.34,11.262l17.282,4.194a1.608,1.608,0,0,0,.7,0,1.7,1.7,0,0,0,.66-.311l5.4-4.5a3.353,3.353,0,0,0-1.087-.951,2.886,2.886,0,0,0-1.437-.37H6.214A2.986,2.986,0,0,0,3.34,11.262"
                transform="translate(0 0)"
                fill={"white"}
          />
        </g>
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

  return (
    <>
      <div className=" mx-auto p-6">
        <div className="flex items-center space-x-4">
          <div className="relative w-32 h-32 rounded-full overflow-hidden">
            <img
              src={profileCoverImage()}
              alt="Profile"
              className="w-full h-full object-cover"
            />
          </div>
          <div>
            <p className="text-2xl	font-light">{activeProfile.profile_name} {activeProfile.profile_lastname}</p>
          </div>
        </div>

        <div className="flex space-x-8 mt-8">
          <div>
            <button
              onClick={ () => handleWallet(card.id)}
              className="w-40  h-16 rounded-full flex items-center justify-center"
              style={{backgroundColor: "#26ACBE"}}
            >
              <IconWallet/>
              <div className="text-left text-white ml-2 text-base leading-tight	">
                Add to
                <br/>
                Wallet
              </div>
            </button>
          </div>
          <div>
            <p className="text-5xl font-bold">{card.views}</p>
            <p className="text-base	">{translations.be_total_visit}</p>
          </div>
        </div>

        <div className="mt-8">
          <ul className="space-y-4 text-2xl ps-font-color">
            <li>
              <Link href={route('cards.edit-url-setting', {id: card.id})}>{translations.be_url_setting}</Link>
            </li>
            <li>
              <Link href={route('cards.edit-email-password', {id: card.id})}>{translations.be_email_and_psw}</Link>
            </li>
            <li>
              <Link href={route('cards.edit-active-profile', {id: card.id})}>{translations.be_profiles_management}</Link>
            </li>
            <li>
              <Link href={route('cards.edit-content-appearance', {id: card.id})}>{translations.be_content_and_appearance}</Link>
            </li>
            <li>
              <Link href={route('cards.edit-redirect', {id: card.id})}>{translations.be_redirect}</Link>
            </li>
            <li>
              <Link href={route('leads.index', {id: card.id})}>{translations.be_lead} <span className={"-mt-4 pl-5 pr-5 pt-0.5 pb-0.5 min-w-40 bg-red-500 text-white text-sm rounded-full"}>{card.leads.length}</span></Link>
            </li>

          </ul>
        </div>

        <div className="mt-8">
          <ul className="space-y-4 text-lg ps-font-color">
          <li>
              <a target={"_blank"} href="https://nfcbusinesscard.it/#help-desk">{translations.be_faq}</a>
            </li>
            {/*<li>
              <a target={"_blank"} href="https://nfcbusinesscard.it/termini-condizioni">Termini e Condizioni</a>
            </li>*/}
            <li>
              <a target={"_blank"} href="https://nfcbusinesscard.it/#prodotti-prezzi">{translations.be_store}</a>
            </li>
            {user.role_id === 3 && (
              <li>
                <Button
                  onPress={() => router.post(route("logout"))}
                  method="post"
                  className="text-lg bg-transparent p-0 ps-font-color justify-between"
                >
                  {translations.be_logout}
                </Button>
              </li>
            )}
          </ul>
        </div>

        <Spacer y={8}/>

        {user.role_id === 1 && (
          <Link
            href={route('cards.index')}>
            <img
              src={iconBack}
              alt="Back"
              className="w-10 h-10 rounded-full cursor-pointer"
            />
          </Link>
        )}

        {user.role_id === 2 && (
          <Link
            href={route('cards.index-company')}>
            <img
              src={iconBack}
              alt="Back"
              className="w-10 h-10 rounded-full cursor-pointer"
            />
          </Link>
        )}

      </div>
    </>
  );
}

Edit.layout = (page) => <AuthenticatedCardRoleLayout children={page} card={page.props.card} title={"Modifica Card"}/>;
