import { Button, Input, Spacer } from "@heroui/react";
import { useInertiaForm } from "use-inertia-form";
import React, { useEffect, useRef, useState } from "react";
import { defaultCreateForm } from "@/Constants/Cards/initialFormValues.js";
import { removeErrors } from "@/Utils/removeErrors.js";
import IconSave from "../../../../public/icons/png/icon-save.png";
import CreateNewUrl from "/public/images/visual-new-url.png";
import { Inertia } from '@inertiajs/inertia';
import {router, usePage} from "@inertiajs/react";

export const CardCreateForm = ({ onClose }) => {
  const { data, setData, post, errors, setError } = useInertiaForm(defaultCreateForm);
  const fileInputRef = useRef(null);
  const fileInputLangRef = useRef(null);
  const { props } = usePage();
  const feedback = props.flash.message;
  const [errorMessage, setErrorMessage] = useState(null);

  const downloadCSV = () => {
    const link = document.createElement('a');
    link.href = `/csv/sample.csv`;
    link.download = 'sample.csv';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  };

  const handleButtonClick = () => {
    fileInputRef.current.click();
  };

  const handleButtonClickLang = () => {
    fileInputLangRef.current.click();
  };

  const handleFileChange = (event) => {
    const file = event.target.files[0];
    if (file) {
      const formData = new FormData();
      formData.append('file', file);

      router.post('/upload-csv', formData, {
        onSuccess: () => {
          onClose();
          setErrorMessage('')
        },
        onError: (page) => {
          if (page.error) {
            setErrorMessage(page.error);
          } else {
            setErrorMessage('An unexpected error occurred.');
          }
        }
      });
    }
  };

  const handleFileChangeLang = (event) => {
    const file = event.target.files[0];
    if (file) {
      const formData = new FormData();
      formData.append('file', file);

      router.post('/upload-csv-lang', formData, {
        onSuccess: () => {
          onClose();
          setErrorMessage('');
        },
        onError: (page) => {
          if (page.error) {
            setErrorMessage(page.error);
          } else {
            setErrorMessage('An unexpected error occurred.');
          }
        }
      });
    }
  };

  useEffect(() => {
    removeErrors(data, errors, setError);
  }, [data]);

  const submit = () => {
    post(route("cards.store"), {
      onSuccess: () => {
        onClose();
      },
    });
  };

  return (
    <>
      <div className="space-y-5 xl:w-2/3 w-full">
        <div className="flex items-center rounded-full">
          <img src={CreateNewUrl} alt="Profile" className="lg:size-32 md:size-20 size-20" />
          <span className={"ml-4 text-[25px] text-white"}>Create a <br /> new URL</span>
        </div>
        <Spacer y="6" />
        <h3 className="text-white text-[25px] ">System-generated</h3>
        <span className={"text-white"}>How many Url do you want to create?</span>
        <form className="flex flex-col gap-5">
          <div className="flex flex-col sm:flex-row items-center">
            <Input
              onChange={(e) => setData("number_url", e.target.value)}
              isInvalid={!!errors.number_url}
              errorMessage={errors.number_url}
              type={"number"}
              isRequired
              className="flex-1"
            />
            <Button
              color="primary"
              onPress={submit}
              className="flex items-center"
              endContent={<img src={IconSave} alt="Salva" className="size-8" />}
            >
            </Button>
          </div>
        </form>
      </div>
      <Spacer y="10" />
      <div className="space-y-5 xl:w-2/3 w-full">
        <h3 className="text-white text-[25px] ">Import CSV</h3>
        <span className={"text-white"}>You can import a CSV to create your URL and automatically insert content. Download the sample CSV file.</span>
        <div className="flex flex-col sm:flex-row items-center gap-3">
          <Button
            type="submit"
            onPress={handleButtonClick}
            className="flex items-center justify-between rounded-full text-black bg-white"
          >
            Select CSV file
          </Button>
          <Button
            type="submit"
            onPress={downloadCSV}
            className="flex items-center justify-between rounded-full text-black bg-white"
          >
            Download test CSV
          </Button>
        </div>
        <input
          type="file"
          accept=".csv"
          ref={fileInputRef}
          style={{ display: 'none' }}
          onChange={handleFileChange}
        />
        {feedback && <div className="mt-4 text-green-600">{feedback}</div>}
        {errorMessage && <div className="mt-4 text-red-500">{errorMessage}</div>}
      </div>
      <Spacer y="20" />
      <div className="space-y-5 xl:w-2/3 w-full">
        <h3 className="text-white text-[25px] ">Languages</h3>
        <span className={"text-white"}>You can import a CSV to increase or decrease the system languages used to translate the content of the web app.</span>
        <div className="flex flex-col sm:flex-row items-center gap-3">
          <Button
            type="submit"
            onPress={handleButtonClickLang}
            className="flex items-center justify-between rounded-full text-black bg-white"
          >
            Select CSV file
          </Button>
        </div>
        <input
          type="file"
          accept=".csv"
          ref={fileInputLangRef}
          style={{ display: 'none' }}
          onChange={handleFileChangeLang}
        />
        {feedback && <div className="mt-4 text-green-600">{feedback}</div>}
        {errorMessage && <div className="mt-4 text-red-500">{errorMessage}</div>}
      </div>
    </>
  );
};
