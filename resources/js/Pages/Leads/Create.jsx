import Logo from "../../../../public/images/logo-teikei-norm.png";
import React from "react";
import {Head, Link, useForm, usePage} from "@inertiajs/react";
import {Button, Input, Spacer} from "@nextui-org/react";
import IconBack from "../../../../public/icons/png/icon-back.png";
import IconPhone from "../../../../public/icons/png/icon-phone.png";
import IconMobilePhone from "../../../../public/icons/png/icon-mobile.png";
import IconEmail from "../../../../public/icons/png/icon-email.png";
import IconWebsite from "../../../../public/icons/png/icon-web.png";
import IconSave from "../../../../public/icons/png/icon-save.png";

export default function Create( {card, profile, translations}) {

  console.log(translations)

  const { data, setData, post, errors } = useForm({
    card_id: card.id,
    lead_title: '',
    lead_name: '',
    lead_lastname: '',
    lead_role: '',
    lead_phone: '',
    lead_mobile_phone: '',
    lead_email: '',
    lead_website: '',
    lead_company_name: '',
    lead_company_address: '',
    lead_company_zipcode: '',
    lead_company_city: '',
    lead_company_province: '',
    lead_company_country: '',
    lead_company_phone: '',
    lead_company_email: '',
    lead_company_vat: '',
  });

  const handleSubmit = (e) => {
    e.preventDefault();
    post(route("lead.store"));
  };

  const { flash } = usePage().props;

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

  return (
    <>
      <Head title="Teikei"/>
      <div>
        <aside
          className={"flex ml-auto flex-row p-6 transition-width bg-transparent z-10"}
        >
          <div
            className={"flex gap-3"}>
            <div className="flex -ml-[4px] rounded-full">
              <img src={Logo} alt="Logo" className="w-32	"/>
            </div>
          </div>
          <div
            className={"ml-auto flex flex-col justify-center"}>

          </div>
        </aside>
      </div>

      <main className={
        "transition-all ml-auto"
      }>

        <div className="mx-auto p-6">
          <div className="flex items-center space-x-4 mb-6">
            <Link className="min-w-10" href={route("card.show", {slug: card.slug})}>
              <img src={IconBack} alt="Back" className="w-10 h-10 rounded-full cursor-pointer"/>
            </Link>
            <div>
              <p className="text-2xl font-light">{translations.fe_create_lead_title}</p>
            </div>
          </div>

          <p className="text-base font-light">
            {translations.fe_create_lead_instruction}
          </p>

          <p className="text-base font-light mt-4">
            {translations.fe_create_lead_not_afraid} {profile.profile_name} {profile.profile_lastname}.
          </p>

          <Spacer y={4}/>

          {flash.success && (
            <div className="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
              {flash.success}
            </div>
          )}

          <form onSubmit={handleSubmit} className="space-y-3 ps-form-lead">

            <input type="hidden" name="card_id" value={data.card_id} />

            <p className={"text-[25px] mb-1"}>{translations.be_basic_info}</p>
            <label htmlFor="lead_title" className="text-[16px] font-medium">{translations.be_title}</label>
            <Input
              type="text"
              id="lead_title"
              placeholder={"Es. Ing."}
              color={errors.lead_title ? "danger" : ""}
              errorMessage={errors.lead_title}
              value={data.lead_title}
              onChange={(e) => setData("lead_title", e.target.value)}
            />

            <label htmlFor="lead_name" className="text-[16px] font-medium">{translations.be_name}</label>
            <Input
              type="text"
              id="lead_name"
              isRequired
              className={"required-border"}
              color={errors.lead_name ? "danger" : ""}
              errorMessage={errors.lead_name}
              value={data.lead_name}
              onChange={(e) => setData("lead_name", e.target.value)}
            />

            <label htmlFor="lead_lastname" className="text-[16px] font-medium">{translations.be_lastname}</label>
            <Input
              type="text"
              id="lead_lastname"
              isRequired
              className={"required-border"}
              color={errors.lead_lastname ? "danger" : ""}
              errorMessage={errors.lead_lastname}
              value={data.lead_lastname}
              onChange={(e) => setData("lead_lastname", e.target.value)}
            />

            <label htmlFor="lead_role" className="text-[16px] font-medium">{translations.be_role}</label>
            <Input
              type="text"
              id="lead_role"
              color={errors.lead_role ? "danger" : ""}
              errorMessage={errors.lead_role}
              value={data.lead_role}
              onChange={(e) => setData("lead_role", e.target.value)}
            />

            <Spacer y={4}/>

            <p className={"text-[25px] mb-1"}>{translations.be_contacts}</p>

            <Input
              type="text"
              id="lead_phone"
              color={errors.lead_phone ? "danger" : ""}
              errorMessage={errors.lead_phone}
              startContent={<img src={IconPhone} alt="Salva" className="size-8"/>}
              value={data.lead_phone}
              onChange={(e) => setData("lead_phone", e.target.value)}
            />

            <Input
              type="text"
              id="lead_mobile_phone"
              isRequired
              className={"required-border"}
              color={errors.lead_mobile_phone ? "danger" : ""}
              errorMessage={errors.lead_mobile_phone}
              startContent={<img src={IconMobilePhone} alt="Salva" className="size-8"/>}
              value={data.lead_mobile_phone}
              onChange={(e) => setData("lead_mobile_phone", e.target.value)}
            />

            <Input
              type="text"
              id="lead_email"
              isRequired
              className={"required-border"}
              color={errors.lead_email ? "danger" : ""}
              errorMessage={errors.lead_email}
              startContent={<img src={IconEmail} alt="Salva" className="size-8"/>}
              value={data.lead_email}
              onChange={(e) => setData("lead_email", e.target.value)}
            />

            <Input
              type="text"
              id="lead_website"
              color={errors.lead_website ? "danger" : ""}
              errorMessage={errors.lead_website}
              startContent={<img src={IconWebsite} alt="Salva" className="size-8"/>}
              value={data.lead_website}
              onChange={(e) => setData("lead_website", e.target.value)}
            />

            <Spacer y={4}/>

            <p className={"text-[25px] mb-1"}>{translations.be_company}</p>

            <label htmlFor="lead_company_name" className="text-[16px] font-medium">{translations.be_company_name}</label>
            <Input
              type="text"
              id="lead_company_name"
              isRequired
              className={"required-border"}
              color={errors.lead_company_name ? "danger" : ""}
              errorMessage={errors.lead_company_name}
              value={data.lead_company_name}
              onChange={(e) => setData("lead_company_name", e.target.value)}
            />

            <label htmlFor="lead_company_address" className="text-[16px] font-medium">{translations.be_primary_address}</label>
            <Input
              type="text"
              id="lead_company_address"
              color={errors.lead_company_address ? "danger" : ""}
              errorMessage={errors.lead_company_address}
              value={data.lead_company_address}
              onChange={(e) => setData("lead_company_address", e.target.value)}
            />

            <label htmlFor="lead_zipcode" className="text-[16px] font-medium">{translations.be_zipcode}</label>
            <Input
              type="text"
              id="lead_zipcode"
              color={errors.lead_zipcode ? "danger" : ""}
              errorMessage={errors.lead_zipcode}
              value={data.lead_zipcode}
              onChange={(e) => setData("lead_zipcode", e.target.value)}
            />

            <label htmlFor="lead_city" className="text-[16px] font-medium">{translations.be_city}</label>
            <Input
              type="text"
              id="lead_city"
              color={errors.lead_city ? "danger" : ""}
              errorMessage={errors.lead_city}
              value={data.lead_city}
              onChange={(e) => setData("lead_city", e.target.value)}
            />

            <label htmlFor="lead_province" className="text-[16px] font-medium">{translations.be_province}</label>
            <Input
              type="text"
              id="lead_province"
              color={errors.lead_province ? "danger" : ""}
              errorMessage={errors.lead_province}
              value={data.lead_province}
              onChange={(e) => setData("lead_province", e.target.value)}
            />

            <label htmlFor="lead_country" className="text-[16px] font-medium">{translations.be_country}</label>
            <Input
              type="text"
              id="lead_country"
              color={errors.lead_country ? "danger" : ""}
              errorMessage={errors.lead_country}
              value={data.lead_country}
              onChange={(e) => setData("lead_country", e.target.value)}
            />

            <label htmlFor="lead_company_phone" className="text-[16px] font-medium">{translations.be_phone}</label>
            <Input
              type="text"
              id="lead_company_phone"
              color={errors.lead_company_phone ? "danger" : ""}
              errorMessage={errors.lead_company_phone}
              value={data.lead_company_phone}
              onChange={(e) => setData("lead_company_phone", e.target.value)}
            />

            <label htmlFor="lead_company_email" className="text-[16px] font-medium">{translations.be_email}</label>
            <Input
              type="text"
              id="lead_company_email"
              color={errors.lead_company_email ? "danger" : ""}
              errorMessage={errors.lead_company_email}
              value={data.lead_company_email}
              onChange={(e) => setData("lead_company_email", e.target.value)}
            />

            <label htmlFor="lead_company_vat" className="text-[16px] font-medium">{translations.be_vat}</label>
            <Input
              type="text"
              id="lead_company_vat"
              color={errors.lead_company_vat ? "danger" : ""}
              errorMessage={errors.lead_company_vat}
              value={data.lead_company_vat}
              onChange={(e) => setData("lead_company_vat", e.target.value)}
            />

            <Spacer y={4}/>

            <p className={"text-[25px] mb-1 font-light"}>{translations.fe_create_lead_thank_you}</p>

            <div className="flex justify-between pb-20">
              <Button
                type="submit"
                className="bg-transparent text-2xl font-light ps-font-color px-0"
                startContent={<img src={IconSave} alt="Salva" className="size-8"/>}
              >
                Save
              </Button>
            </div>

          </form>

        </div>

      </main>
    </>
  );
}


