import {router, useForm, usePage} from "@inertiajs/react";
import {Transition} from "@headlessui/react";
import {Button, Input, Spacer} from "@nextui-org/react";
import IconSave from "../../../../public/icons/png/icon-save.png";
import React from "react";

export default function UpdateProfileInformation(translations) {
  const user = usePage().props.auth.user;

  const {data, setData, post, errors, processing, recentlySuccessful} = useForm({
    name: user.name,
    email: user.email,
  });

  const submit = (e) => {
    e.preventDefault();
    post(route("profile.update"));
  };

  return (
    <form onSubmit={submit} className="mt-6 space-y-3">

      <label htmlFor="email" className="text-[16px] block text-smtext-black-900">
        {translations.translations.be_authentication_email}
      </label>
      <Input
        value={data.email}
        onChange={(e) => setData("email", e.target.value)}
        required
        color={errors.email ? "danger" : ""}
        errorMessage={errors.email}
        autoComplete="username"
      ></Input>


      <div className="flex justify-end items-end gap-4">
        <Button
          type="submit"
          className="flex justify-end pr-0 bg-transparent text-2xl font-light ps-font-color"
          startContent={<img src={IconSave} alt="Salva" className="size-8"/>}
        >
          Save
        </Button>
      </div>
    </form>
  );
}
