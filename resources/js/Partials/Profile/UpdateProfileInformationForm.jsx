import {router, useForm, usePage} from "@inertiajs/react";
import {Transition} from "@headlessui/react";
import {Button, Input, Spacer} from "@heroui/react";
import IconSave from "../../../../public/icons/png/icon-save.png";
import React from "react";

export default function UpdateProfileInformation() {
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

      <label htmlFor="name" className="text-white text-[16px] block text-sm font-medium text-black-900">
        Nome
      </label>
      <Input
        value={data.name}
        onChange={(e) => setData("name", e.target.value)}
        required
        isFocused
        color={errors.name ? "danger" : ""}
        errorMessage={errors.name}
        autoComplete="name"
      ></Input>

      <label htmlFor="email" className="text-white text-[16px] block text-sm font-medium text-black-900">
        Email di autenticazione
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
          color="primary"
          type="submit"
          disabled={processing}
          className="flex justify-end pr-0 text-2xl"
        >
            Salva
        </Button>
      </div>
    </form>
  );
}
