import React, { useState, useRef } from 'react';
import axios from 'axios';
import IconAddNewImage from "../../../../public/icons/png/icon-add-image.png";
import IconDelete from "../../../../public/icons/png/icon-delete.png";
import {Button} from "@nextui-org/react";
import IconCollapse from "../../../../public/icons/png/icon-collapse-on.png";
import IconExpand from "../../../../public/icons/png/icon-collapse-off.png";

const EditImagesProfile = ({ profile, translations }) => {
  const [images, setImages] = useState(profile.images);
  const fileInputRef = useRef(null);

  const [isCollapsed, setIsCollapsed] = useState(profile.is_images_collapsed);

  const toggleCollapse = () => {
    const updatedCollapseState = !isCollapsed;
    setIsCollapsed(updatedCollapseState);

    axios.patch(route('update-is-images-collapsed', { id: profile.id }), {
      isImagesCollapsed: updatedCollapseState,
    })
      .then(response => {
      })
      .catch(error => {
        console.error('Error updating collapse state:', error);
        setIsCollapsed(!updatedCollapseState);
      });
  };

  const handleFileChange = (event) => {
    const file = event.target.files[0];
    if (file) {
      const allowedExtensions = ['jpg', 'jpeg', 'png'];
      const fileExtension = file.name.split('.').pop().toLowerCase();

      if (!allowedExtensions.includes(fileExtension)) {
        alert('Invalid file type. Only JPG, JPEG, and PNG files are allowed.');
        return;
      }

      if (file.size > 5 * 1024 * 1024) { // Limite di 64MB
        alert('File is too large. Maximum size is 5MB.');
        return;
      }

      const formData = new FormData();
      formData.append('image_name', file.name);
      formData.append('image_path', file);
      formData.append('profile_id', profile.id);

      axios.post(route('create-image', { id: profile.id }), formData)
        .then(response => {
          const { id, image } = response.data;
          if (id && image) {
            const newImage = {
              id: id,
              image_path: `/storage/${image.replace('public/', '')}`,
              image_name: file.name,
            };
            console.log(newImage)
            setImages(prevImages => [...prevImages, newImage]);
          } else {
            console.error('Invalid response from server');
          }
          fileInputRef.current.value = '';
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }
  };

  const handleDeleteImage = (imageId) => {
    axios.post(route('delete-image', { id: imageId }))
      .then(response => {
        setImages(prevImages => prevImages.filter(image => image.id !== imageId)); // Rimuovi l'immagine dalla lista
      })
      .catch(error => {
        console.error('Error:', error);
      });
  };

  return (
    <>
      <div className="flex flex-wrap gap-4 p-1">
        {images.map((image) => {
          const image_url = image.image_path ? `${image.image_path}` : '/storage/image/0/icon-fallback.png';
          return (
            <div key={image.id} className="relative w-24 h-24 p-1 overflow-hidden">
              <img
                src={image_url}
                alt={image.image_name}
                className="w-full h-full object-cover"
              />
              <img
                src={IconDelete}
                alt="Delete Image"
                className="absolute bottom-0 right-1 w-8 h-8 cursor-pointer"
                onClick={() => handleDeleteImage(image.id)}
              />
            </div>
          );
        })}

        <div className="w-auto rounded-full p-1 cursor-pointer">
          <img
            onClick={() => fileInputRef.current.click()}
            src={IconAddNewImage}
            alt="Add New Image"
            className="w-24 h-24"
          />
          <input
            type="file"
            ref={fileInputRef}
            style={{display: 'none'}}
            accept="image/*"
            onChange={handleFileChange}
          />
        </div>
      </div>
      <div className="flex justify-between mt-4">
        <div>
          <Button
            type="button"
            className="bg-transparent text-base font-medium px-0"
            onClick={toggleCollapse}
            startContent={<img src={isCollapsed ? IconCollapse : IconExpand} alt="Collapse/Expand" className="w-8"/>}
          >
            {translations.be_collapse}
          </Button>
        </div>
      </div>
    </>
  );
};

export default EditImagesProfile;
