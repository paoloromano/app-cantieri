import React, {useRef, useState} from 'react';
import { Input, Button } from "@nextui-org/react";
import IconSave from "../../../../public/icons/png/icon-save.png";
import IconEditImage from "/public/icons/png/icon-modify.png";
import IconDeleteImage from "/public/icons/png/icon-delete.png";
import {useForm} from "@inertiajs/react";
import IconExpand from "/public/icons/png/icon-collapse-off.png";
import IconCollapse from "/public/icons/png/icon-collapse-on.png";

const EditCompanyInfoProfile = ({ profile, translations }) => {

  console.log(translations)

  const isProfileLoaded = profile && profile.profile_name !== undefined;
  const companyForm = useRef(null);

  const [isCompanyCollapsed, setIsCompanyCollapsed] = useState(profile.is_company_collapsed);

  const [logo, setLogo] = useState(() => {
    if (profile.profile_company_logo) {
      return `${profile.profile_company_logo}`;
    }
    return '/storage/image/0/icon-fallback-logo-backend.png';
  });

  const fileInputRef = useRef(null);

  const { data, setData, patch, errors } = useForm({
    profile_company_name: profile?.profile_company_name || '',
    profile_company_first_address: profile?.profile_company_first_address || '',
    profile_company_second_address: profile?.profile_company_second_address || '',
    profile_zipcode: profile?.profile_zipcode || '',
    profile_city: profile?.profile_city || '',
    profile_province: profile?.profile_province || '',
    profile_country: profile?.profile_country || '',
    profile_company_phone: profile?.profile_company_phone || '',
    profile_company_fax: profile?.profile_company_fax || '',
    profile_company_email: profile?.profile_company_email || '',
    profile_company_pec: profile?.profile_company_pec || '',
    profile_company_sdi: profile?.profile_company_sdi || '',
    profile_company_vat: profile?.profile_company_vat || '',
    profile_company_cf: profile?.profile_company_cf || '',
  });

  const toggleCompanyCollapse = () => {
    setIsCompanyCollapsed(!isCompanyCollapsed);
    patch(route('update-is-company-collapsed', { id: profile.id, isCompanyCollapsed: !isCompanyCollapsed }), {
      onSuccess: () => {
        companyForm.current.scrollIntoView({ behavior: 'smooth' });
      }
    });
  };

  const handleSubmitCompanyProfile = (e) => {
    e.preventDefault();
    patch(route('update-company-info-profile', { id: profile.id }), {
      onSuccess: () => {
        companyForm.current.scrollIntoView({ behavior: 'smooth' });
      }
    });
  };

  const handleFileChange = (event) => {
    const file = event.target.files[0];
    if (file) {
      const allowedExtensions = ['jpg', 'jpeg', 'png'];
      const fileExtension = file.name.split('.').pop().toLowerCase();

      if (!allowedExtensions.includes(fileExtension)) {
        alert('Invalid file type. Only JPG, JPEG and PNG files are allowed.');
        return;
      }

      if (file.size > 5 * 1024 * 1024) {
        alert('File is too large. Maximum size is 5MB.');
        return;
      }

      const formData = new FormData();
      formData.append('image_name', file.name);
      formData.append('profile_company_logo', file);
      formData.append('profile_id', profile.id);

      axios.post(route('create-logo-image', { id: profile.id }), formData)
        .then(response => {
          const newLogoPath = `/storage/${response.data.image.replace('public/', '')}`;
          setLogo(newLogoPath);  // Aggiorna il valore di logo con il nuovo percorso
          fileInputRef.current.value = '';
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }
  };

  const handleDeleteImage = () => {
    axios.post(route('delete-logo-image', { id: profile.id }))
      .then(response => {
        setLogo('/storage/image/0/icon-fallback-logo-backend.png');
      })
      .catch(error => {
        console.error('Error:', error);
      });
  };

  React.useEffect(() => {
    if (isProfileLoaded) {
      setData({
        profile_company_name: profile.profile_company_name || '',
        profile_company_first_address: profile.profile_company_first_address || '',
        profile_company_second_address: profile.profile_company_second_address || '',
        profile_zipcode: profile.profile_zipcode || '',
        profile_city: profile.profile_city || '',
        profile_province: profile.profile_province || '',
        profile_country: profile.profile_country || '',
        profile_company_phone: profile.profile_company_phone || '',
        profile_company_fax: profile.profile_company_fax || '',
        profile_company_email: profile.profile_company_email || '',
        profile_company_pec: profile.profile_company_pec || '',
        profile_company_sdi: profile.profile_company_sdi || '',
        profile_company_vat: profile.profile_company_vat || '',
        profile_company_cf: profile.profile_company_cf || '',
      });
      if (profile.profile_company_logo) {
        setLogo(`${profile.profile_company_logo}`);
      } else {
        setLogo('/storage/image/0/icon-fallback-logo-backend.png');
      }
    }
  }, [profile]);

  return (
    <>

      <div className="flex">
        <div className="flex flex-col items-center justify-center">
          <img src={logo} alt="Company Logo" className="rounded-full w-24 h-24"/>
        </div>

        <div className="flex flex-col justify-start ml-4">
          <span className="text-left mb-1">{translations.be_logo}</span>
          <div className="flex items-start space-x-1">
            <Button
              onClick={() => fileInputRef.current.click()}
              isIconOnly
              className={"bg-transparent"}
              startContent={<img src={IconEditImage} alt="Edit" className="size-8"/>}
            />
            <Button
              onClick={handleDeleteImage}
              isIconOnly
              className={"bg-transparent"}
              startContent={<img src={IconDeleteImage} alt="Delete" className="size-8"/>}
            />
          </div>
          <input
            type="file"
            ref={fileInputRef}
            style={{ display: 'none' }}
            accept="image/*"
            onChange={handleFileChange}
          />
        </div>
      </div>

      <form ref={companyForm} onSubmit={handleSubmitCompanyProfile} className="space-y-3 mt-8">

        <label htmlFor="profile_company_name" className="text-[16px] font-medium">{translations.be_company_name}</label>
        <Input
          type="text"
          id="profile_company_name"
          value={data.profile_company_name}
          onChange={(e) => setData({...data, profile_company_name: e.target.value})}
          color={errors.profile_company_name ? "danger" : ""}
          errorMessage={errors.profile_company_name}
        />

        <label htmlFor="profile_company_first_address" className="text-[16px] font-medium">{translations.be_primary_address}</label>
        <Input
          type="text"
          id="profile_company_first_address"
          value={data.profile_company_first_address}
          onChange={(e) => setData({...data, profile_company_first_address: e.target.value})}
          color={errors.profile_company_first_address ? "danger" : ""}
          errorMessage={errors.profile_company_first_address}
        />

        <label htmlFor="profile_company_second_address" className="text-[16px] font-medium">{translations.be_secondary_address}</label>
        <Input
          type="text"
          id="profile_company_second_address"
          value={data.profile_company_second_address}
          onChange={(e) => setData({...data, profile_company_second_address: e.target.value})}
          color={errors.profile_company_second_address ? "danger" : ""}
          errorMessage={errors.profile_company_second_address}
        />

        <label htmlFor="profile_zipcode" className="text-[16px] font-medium">{translations.be_zipcode}</label>
        <Input
          type="text"
          id="profile_zipcode"
          value={data.profile_zipcode}
          onChange={(e) => setData({...data, profile_zipcode: e.target.value})}
          color={errors.profile_zipcode ? "danger" : ""}
          errorMessage={errors.profile_zipcode}
        />

        <label htmlFor="profile_city" className="text-[16px] font-medium">{translations.be_city}</label>
        <Input
          type="text"
          id="profile_city"
          value={data.profile_city}
          onChange={(e) => setData({...data, profile_city: e.target.value})}
          color={errors.profile_city ? "danger" : ""}
          errorMessage={errors.profile_city}
        />

        <label htmlFor="profile_province" className="text-[16px] font-medium">{translations.be_province}</label>
        <Input
          type="text"
          id="profile_province"
          value={data.profile_province}
          onChange={(e) => setData({...data, profile_province: e.target.value})}
          color={errors.profile_province ? "danger" : ""}
          errorMessage={errors.profile_province}
        />

        <label htmlFor="profile_country" className="text-[16px] font-medium">{translations.be_country}</label>
        <Input
          type="text"
          id="profile_country"
          value={data.profile_country}
          onChange={(e) => setData({...data, profile_country: e.target.value})}
          color={errors.profile_country ? "danger" : ""}
          errorMessage={errors.profile_country}
        />

        <label htmlFor="profile_company_phone" className="text-[16px] font-medium">{translations.be_phone}</label>
        <Input
          type="text"
          id="profile_company_phone"
          value={data.profile_company_phone}
          onChange={(e) => setData({...data, profile_company_phone: e.target.value})}
          color={errors.profile_company_phone ? "danger" : ""}
          errorMessage={errors.profile_company_phone}
        />

        <label htmlFor="profile_company_fax" className="text-[16px] font-medium">{translations.be_fax}</label>
        <Input
          type="text"
          id="profile_company_fax"
          value={data.profile_company_fax}
          onChange={(e) => setData({...data, profile_company_fax: e.target.value})}
          color={errors.profile_company_fax ? "danger" : ""}
          errorMessage={errors.profile_company_fax}
        />

        <label htmlFor="profile_company_email" className="text-[16px] font-medium">{translations.be_email}</label>
        <Input
          type="text"
          id="profile_company_email"
          value={data.profile_company_email}
          onChange={(e) => setData({...data, profile_company_email: e.target.value})}
          color={errors.profile_company_email ? "danger" : ""}
          errorMessage={errors.profile_company_email}
        />

        <label htmlFor="profile_company_pec" className="text-[16px] font-medium">{translations.be_certified_email}</label>
        <Input
          type="text"
          id="profile_company_pec"
          value={data.profile_company_pec}
          onChange={(e) => setData({...data, profile_company_pec: e.target.value})}
          color={errors.profile_company_pec ? "danger" : ""}
          errorMessage={errors.profile_company_pec}
        />

        <label htmlFor="profile_company_sdi" className="text-[16px] font-medium">{translations.be_sdi}</label>
        <Input
          type="text"
          id="profile_company_sdi"
          value={data.profile_company_sdi}
          onChange={(e) => setData({...data, profile_company_sdi: e.target.value})}
          color={errors.profile_company_sdi ? "danger" : ""}
          errorMessage={errors.profile_company_sdi}
        />

        <label htmlFor="profile_company_vat" className="text-[16px] font-medium">{translations.be_vat}</label>
        <Input
          type="text"
          id="profile_company_vat"
          value={data.profile_company_vat}
          onChange={(e) => setData({...data, profile_company_vat: e.target.value})}
          color={errors.profile_company_vat ? "danger" : ""}
          errorMessage={errors.profile_company_vat}
        />

        <label htmlFor="profile_company_cf" className="text-[16px] font-medium">{translations.be_tax_code}</label>
        <Input
          type="text"
          id="profile_company_cf"
          value={data.profile_company_cf}
          onChange={(e) => setData({...data, profile_company_cf: e.target.value})}
          color={errors.profile_company_cf ? "danger" : ""}
          errorMessage={errors.profile_company_cf}
        />

        <div className="flex justify-between mt-4">
          <div>
            <Button
              type="button"
              className="bg-transparent text-base font-medium px-0"
              onClick={toggleCompanyCollapse}
              startContent={<img src={isCompanyCollapsed ? IconCollapse : IconExpand} alt="Collapse/Expand" className="w-8"/>}
            >
              {translations.be_collapse}
            </Button>
          </div>
          <div>
            <Button
              type="submit"
              className="bg-transparent text-2xl font-light ps-font-color px-0"
              startContent={<img src={IconSave} alt="Salva" className="size-8"/>}
            >
              Save
            </Button>
          </div>
        </div>
      </form>
    </>
  );
};

export default EditCompanyInfoProfile;
