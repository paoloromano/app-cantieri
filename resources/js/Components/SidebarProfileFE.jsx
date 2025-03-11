import React, { useState } from "react";
import Logo from "../../../public/images/logo-teikei-norm.png";
import iconClose from "../../../public/icons/png/icon-close.png";
import iconEdit from "/public/icons/png/icon-modify.png";
import { router, useForm } from "@inertiajs/react";
import IconPswHide from "/public/icons/png/icon-visibility-off.png";
import IconPswShow from "/public/icons/png/icon-visibility-on.png";

import { Button, Checkbox, Input, Radio, RadioGroup, Spacer } from "@nextui-org/react";

const SidebarCreateCardFE = ({ isOpen, onClose, user, profile, card, status }) => {
  const [selectedProfileId, setSelectedProfileId] = useState(profile.id);
  const [profiles, setProfiles] = useState(card.profiles);

  const translations = card.translations;

  const { data, setData, post, processing, errors, reset, setError } = useForm({
    email: "",
    password: "",
    remember: false,
  });

  const login = (e) => post(route("login"));
  const forgot_password = (e) => router.get(route("password.request"));

  const [passwordVisible, setPasswordVisible] = useState(false);

  const handleEditProfile = (profileId) => () => {
    router.get(route('cards.edit-content-appearance', { id: card.id }), { profile_id: profileId });
  };

  const handleProfileChange = (newProfileId) => {
    setSelectedProfileId(newProfileId);

    router.post(route('cards.set-active-profile-fe', { id: card.id }), { profile_id: newProfileId }, {
      onSuccess: () => {
        //window.location.reload();
      },
      onError: (errors) => {
        console.error('Errore durante l\'aggiornamento del profilo:', errors);
      }
    });
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

  return (
    <div
      className={`fixed top-0 left-0 w-full max-w-full transition-transform z-50 ${
        isOpen ? "transform-none" : "-translate-y-full"
      }`}
      style={{ height: "auto" }}
    >
      <div className="p-8 bg-white shadow-lg">
        <div>
          <aside className={"flex ml-auto flex-row transition-width bg-transparent z-10"}>
            <div className={"flex gap-3"}>
              <div className="flex -ml-[4px] rounded-full">
                <img src={Logo} alt="Logo" className="w-32" />
              </div>
            </div>
            <div className={"ml-auto flex flex-col"}>
              <div className="flex items-center justify-center rounded-full">
                <button onClick={onClose} className="ml-4">
                  <img src={iconClose} alt="add card" className="size-10" />
                </button>
              </div>
            </div>
          </aside>
        </div>

        {user && (
          <div className={"flex flex-col mt-11 mb-20"}>
            <a href={`/cards/${card.id}/edit`} target={"_blank"}
               className={"font-medium text-2xl ps-font-color mb-4"}>{translations.fe_settings}</a>

            <button
              onClick={() => handleWallet(card.id)}
              className="w-40 h-16 rounded-full flex items-center justify-center mb-4"
              style={{backgroundColor: "#26ACBE"}}
            >
              <IconWallet/>
              <div className="text-left text-white ml-2 text-base leading-tight	">
                Add to
                <br/>
                Wallet
              </div>
            </button>

            <hr/>

            <p className={"font-light text-2xl text-black mt-8"}>{translations.fe_change_profile}</p>

            <RadioGroup
              value={selectedProfileId}
              onValueChange={handleProfileChange}
              className="mt-6 space-y-4"
            >
              {profiles.map(profile => {
                const profileCoverImage = () => {
                  if (profile.profile_theme_type === 'hero' && profile.profile_img_cover_hero !== '/storage/') {
                    return profile.profile_img_cover_hero;
                  } else if (profile.profile_theme_type === 'balloon' && profile.profile_img_cover_balloon !== '/storage/') {
                    return profile.profile_img_cover_balloon;
                  } else {
                    return "https://via.placeholder.com/150";
                  }
                };

                return (
                  <div key={profile.id} className="flex items-center space-x-4">
                    <div className="relative w-16 h-16 rounded-full overflow-hidden">
                      <img
                        src={profileCoverImage()}
                        alt={`${profile.profile_name} ${profile.profile_lastname}`}
                        className="w-full h-full object-cover"
                      />
                    </div>
                    <div className="flex-1">
                      <p className="text-base font-medium">{profile.profile_name} {profile.profile_lastname}</p>
                      <p className="text-base font-light">{profile.profile_company_name}</p>
                    </div>
                    <div className="ml-auto">
                      <Radio value={profile.id}/>
                    </div>
                    <div className="ml-auto">
                      <button onClick={handleEditProfile(profile.id)}>
                        <img src={iconEdit} alt="edit profile" className="size-10"/>
                      </button>
                    </div>
                  </div>
                );
              })}
            </RadioGroup>
          </div>
        )}

        {!user && (
          <div className={"flex flex-col mt-11"}>
            <p className={"font-medium text-2xl"}>Log into your account</p>
            <p className={"font-light text-base"}>Enter activation email and password to manage your TCard.</p>

            <form className={"mt-8 mb-20"}>
              <p className="text-success font-medium text-sm">{status}</p>

              <div className={"mb-4"}>
                <label htmlFor="email" className="block text-sm font-medium text-black-900">
                  Email
                </label>
                <Spacer y={2} />
                <Input
                  placeholder=""
                  type="email"
                  autoComplete="username"
                  classNames={{ inputWrapper: "bg-gray-200 group-data-[hover=true]:bg-gray-200 group-data-[focus=true]:bg-gray-200" }}
                  value={data.email}
                  onChange={(e) => setData("email", e.target.value)}
                  isInvalid={!!errors.email}
                  errorMessage={errors.email}
                />
              </div>

              <Spacer y={4} />
              <div className={"mb-4"}>
                <label htmlFor="password" className="block text-sm font-medium text-black-900">
                  Password
                </label>
                <Spacer y={2} />
                <Input
                  type={passwordVisible ? "text" : "password"}
                  autoComplete="current-password"
                  placeholder={""}
                  classNames={{ inputWrapper: "bg-gray-200 group-data-[hover=true]:bg-gray-200 group-data-[focus=true]:bg-gray-200" }}
                  endContent={
                    <Button variant="light" size="sm" onPress={() => setPasswordVisible(!passwordVisible)} isIconOnly>
                      {passwordVisible ? <img className={"size-6"} src={IconPswHide} /> : <img className={"size-6"} src={IconPswShow} />}
                    </Button>
                  }
                  value={data.password}
                  onChange={(e) => setData("password", e.target.value)}
                  isInvalid={!!errors.password}
                  errorMessage={errors.password}
                />
              </div>

              <div className="mt-5 sm:mt-5 flex gap-3 sm:gap-10 justify-between select-none">
                <div className="flex flex-col sm:flex-row gap-1 flex-grow">
                  <Checkbox className={"checkbox-wrapper"} name="remember" value={data.remember}
                            onChange={(e) => setData("remember", e.target.checked)}>
                    Remember me
                  </Checkbox>
                </div>

                <div className="flex flex-col sm:flex-row gap-1">
                  <Button className={"ps-font-color bg-transparent px-0 text-lg"} variant="light" onPress={login} disabled={processing}>
                    Login
                  </Button>
                </div>
              </div>

              <Button className={"ps-font-color bg-transparent px-0 flex underline"}
                      onPress={() => router.visit(route("password.request"))}>
                Forgot password?
              </Button>
            </form>
          </div>
        )}
      </div>
    </div>
  );
};

export default SidebarCreateCardFE;
