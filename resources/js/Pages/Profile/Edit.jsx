import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import UpdatePasswordForm from "@/Partials/Profile/UpdatePasswordForm.jsx";
import UpdateProfileInformationForm from "@/Partials/Profile/UpdateProfileInformationForm.jsx";
import { Head, usePage } from "@inertiajs/react";
import placeholderProfilePhoto from "../../../../public/images/profile/icon-fallback-profile.png";
import React, { useRef, useState } from "react";
import { Button, Spacer } from "@nextui-org/react";
import IconEditImage from "../../../../public/icons/png/icon-modify.png";
import IconDeleteImage from "../../../../public/icons/png/icon-delete.png";
import axios from "axios";

export default function Edit() {
  const { user: initialUser } = usePage().props.auth;
  const fileInputRef = useRef(null);

  // Stato per l'utente aggiornabile
  const [user, setUser] = useState(initialUser);

  // Stato per la foto del profilo
  const [logo, setLogo] = useState(() => {
    return user?.company?.company_logo?.trim()
      ? `/storage/${user.company.company_logo.replace("public/", "")}`
      : placeholderProfilePhoto;
  });

  // Funzione per gestire l'upload della nuova immagine
  const handleFileChange = (event) => {
    const file = event.target.files[0];

    if (file) {
      const allowedExtensions = ["jpg", "jpeg", "png"];
      const fileExtension = file.name.split(".").pop().toLowerCase();

      if (!allowedExtensions.includes(fileExtension)) {
        alert("Invalid file type. Only JPG, JPEG and PNG files are allowed.");
        return;
      }

      if (file.size > 5 * 1024 * 1024) {
        alert("File is too large. Maximum size is 5MB.");
        return;
      }

      const formData = new FormData();
      formData.append("company_logo", file);

      // Controllo presenza di user.company.id e scelta della rotta dinamica
      const companyId = user?.company?.id || 1;
      const routeName = user.company.id === 1
        ? "super-admin.company.uploadLogo"
        : "company.uploadLogo";

      formData.append("company_id", companyId);

      axios
        .post(route(routeName, { id: companyId }), formData, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((response) => {
          const newLogoPath = `/storage/${response.data.image.replace("public/", "")}`;
          setLogo(newLogoPath);

          // Aggiornamento dello stato utente per riflettere la modifica
          setUser({
            ...user,
            company: {
              ...user.company,
              company_logo: response.data.image,
            },
          });

          window.location.reload();

          fileInputRef.current.value = "";
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    }
  };

  // Funzione per eliminare il logo aziendale
  const handleDeleteImage = () => {
    // Controllo presenza di user.company.id e scelta della rotta dinamica
    const companyId = user?.company?.id || 1;
    const routeName = user.company.id === 1
      ? "super-admin.company.deleteLogo"
      : "company.deleteLogo";

    axios
      .post(route(routeName, { id: companyId }))
      .then(() => {
        setLogo(placeholderProfilePhoto);

        // Aggiorna lo stato utente dopo la rimozione del logo
        setUser({
          ...user,
          company: {
            ...user.company,
            company_logo: null,
          },
        });

        window.location.reload();
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  };

  return (
    <>
      <div className="space-y-5 xl:w-3/4 lg:w-2/3 sm:w-full">

        <UpdateProfileInformationForm/>

        <UpdatePasswordForm/>

      </div>
    </>
  );
}

Edit.layout = (page) => <AuthenticatedLayout children={page}/>;
