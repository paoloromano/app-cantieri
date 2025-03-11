import React, {useRef, useState} from 'react';
import {Input, Button} from "@nextui-org/react";
import IconEditImage from "/public/icons/png/icon-modify.png";
import IconDeleteImage from "/public/icons/png/icon-delete.png";
import IconTooltip from "/public/icons/png/icon-tooltip.png"
import {Tooltip, Popover, PopoverTrigger, PopoverContent} from "@nextui-org/react";


const EditCoverImageProfile = ({ profile, translations }) => {
  const isProfileLoaded = profile && profile.profile_name !== undefined;
  const coverImageForm = useRef(null);

  const [coverBalloon, setCoverBalloon] = useState(() => {
    if (profile.profile_img_cover_balloon) {
      return `${profile.profile_img_cover_balloon}`;
    }
    return '/storage/image/0/icon-light-mode.png';
  });

  const [coverHero, setCoverHero] = useState(() => {
    if (profile.profile_img_cover_hero) {
      return `${profile.profile_img_cover_hero}`;
    }
    return '/storage/image/0/icon-dark-mode.png';
  });

  const fileInputRefBalloon = useRef(null);
  const fileInputRefHero = useRef(null);

  const handleFileChangeBalloon = (event) => {
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
      formData.append('profile_img_cover_balloon', file);
      formData.append('profile_id', profile.id);

      axios.post(route('create-cover-balloon-image', { id: profile.id }), formData)
        .then(response => {
          const newLogoPath = `/storage/${response.data.image.replace('public/', '')}`;
          setCoverBalloon(newLogoPath);
          fileInputRefBalloon.current.value = '';
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }
  };

  const handleFileChangeHero = (event) => {
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
      formData.append('profile_img_cover_hero', file);
      formData.append('profile_id', profile.id);

      axios.post(route('create-cover-hero-image', { id: profile.id }), formData)
        .then(response => {
          const newLogoPath = `/storage/${response.data.image.replace('public/', '')}`;
          setCoverHero(newLogoPath);
          fileInputRefHero.current.value = '';
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }
  };

  const handleDeleteImageBalloon = () => {
    axios.post(route('delete-cover-balloon-image', { id: profile.id }))
      .then(response => {
        console.log('Success:', response.data);
        setCoverBalloon('/storage/image/0/icon-light-mode.png');
      })
      .catch(error => {
        console.error('Error:', error);
      });
  };

  const handleDeleteImageHero = () => {
    axios.post(route('delete-cover-hero-image', { id: profile.id }))
      .then(response => {
        console.log('Success:', response.data);
        setCoverHero('/storage/image/0/icon-light-mode.png');  // Imposta l'immagine di fallback per l'hero
      })
      .catch(error => {
        console.error('Error:', error);
      });
  };

  React.useEffect(() => {
    if (isProfileLoaded) {
      if (profile.profile_img_cover_balloon) {
        setCoverBalloon(`${profile.profile_img_cover_balloon}`);
      } else {
        setCoverBalloon('/storage/image/0/icon-light-mode.png');
      }
    }
  }, [profile]);

  React.useEffect(() => {
    if (isProfileLoaded) {
      if (profile.profile_img_cover_hero) {
        setCoverHero(`${profile.profile_img_cover_hero}`);
      } else {
        setCoverHero('/storage/image/0/icon-light-mode.png');
      }
    }
  }, [profile]);

  return (
    <>
      <div className="flex justify-between">
        <div className="flex flex-col items-center w-1/2">
          <img src={coverBalloon} alt="Cover Balloon Image" className="rounded-full w-32 h-32"/>
          <div className="flex space-x-1 -mt-6">
            <Button
              onClick={() => fileInputRefBalloon.current.click()}
              isIconOnly
              className={"bg-transparent"}
              startContent={<img src={IconEditImage} alt="Edit" className="size-8"/>}
            />
            <Button
              onClick={handleDeleteImageBalloon}
              isIconOnly
              className={"bg-transparent"}
              startContent={<img src={IconDeleteImage} alt="Delete" className="size-8"/>}
            />
          </div>
          <span className="text-left mb-1">Balloon</span>
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
                  {/*<div className="text-small">Immagine profilo “Balloon”</div>
                  <div className="text-small">Dimensione > 1:1 (quadrata)</div>
                  <div className="text-small">Formato: JPG o PNG</div>*/}
                  <div className="text-small w-60">{translations.be_profile_image_balloon_instruction}</div>
                </div>
              )}
            </PopoverContent>
          </Popover>
          <input
            type="file"
            ref={fileInputRefBalloon}
            style={{display: 'none'}}
            accept="image/*"
            onChange={handleFileChangeBalloon}
          />
        </div>

        <div className="flex flex-col items-center w-1/2">
          <div className="relative w-32 h-32 rounded-full overflow-hidden">
            <img
              src={coverHero}
              alt="Cover Hero Image"
              className="w-full h-full object-cover"
            />
          </div>
          <div className="flex space-x-1 -mt-6">
            <Button
              onClick={() => fileInputRefHero.current.click()}
              isIconOnly
              className={"bg-transparent"}
              startContent={<img src={IconEditImage} alt="Edit" className="size-8"/>}
            />
            <Button
              onClick={handleDeleteImageHero}
              isIconOnly
              className={"bg-transparent"}
              startContent={<img src={IconDeleteImage} alt="Delete" className="size-8"/>}
            />
          </div>
          <span className="text-left mb-1">Hero</span>
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
                  {/*<div className="text-small">Immagine profilo “Hero”</div>
                  <div className="text-small">Dimensione > 9:16 (rettangolare)</div>
                  <div className="text-small">Formato: JPG o PNG</div>*/}
                  <div className="text-small w-60">{translations.be_profile_image_hero_instruction}</div>
                </div>
              )}
            </PopoverContent>
          </Popover>
          <input
            type="file"
            ref={fileInputRefHero}
            style={{display: 'none'}}
            accept="image/*"
            onChange={handleFileChangeHero}
          />
        </div>
      </div>
    </>
  );
};

export default EditCoverImageProfile;
