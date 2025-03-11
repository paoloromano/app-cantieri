import React, {useRef, useState} from "react";
import {useForm} from "@inertiajs/react";
import {Transition} from "@headlessui/react";
import {Button, Input} from "@nextui-org/react";
import {IconEye, IconEyeOff} from "@tabler/icons-react";
import IconSave from "/public/icons/png/icon-save.png";
import IconPswShow from "/public/icons/png/icon-visibility-on.png"
import IconPswHide from "/public/icons/png/icon-visibility-off.png"

export default function UpdatePasswordForm() {
  const passwordInput = useRef();
  const currentPasswordInput = useRef();

  const [passwordCurrentVisible, setPasswordCurrentVisible] = useState(false);
  const [passwordNewVisible, setPasswordNewVisible] = useState(false);
  const [passwordConfirmNewVisible, setPasswordConfirmNewVisible] = useState(false);

  const {data, setData, errors, put, reset, processing, recentlySuccessful} = useForm({
    current_password: "",
    password: "",
    password_confirmation: "",
  });

  const updatePassword = (e) => {
    e.preventDefault();
    put(route("password.update"), {
      preserveScroll: true,
      onSuccess: () => reset(),
      onError: (errors) => {
        if (errors.password) {
          reset("password", "password_confirmation");
          passwordInput.current.focus();
        }

        if (errors.current_password) {
          reset("current_password");
          currentPasswordInput.current.focus();
        }
      },
    });
  };

  return (
    <form onSubmit={updatePassword} className="mt-6 space-y-3">
      <label htmlFor="current_password" className="text-white text-[16px] block text-sm font-medium text-black-900">
        Password attuale
      </label>
      <Input
        id="current_password"
        type={passwordCurrentVisible ? "text" : "password"}
        autoComplete="current-password"
        required
        ref={currentPasswordInput}
        value={data.current_password}
        onChange={(e) => setData("current_password", e.target.value)}
        error={errors.current_password}
        errorMessage={errors.current_password}
        endContent={
          <Button variant="light" size="sm" onPress={() => setPasswordCurrentVisible(!passwordCurrentVisible)} isIconOnly>
            {passwordCurrentVisible ? <img className={"size-6"} src={IconPswHide}/> : <img className={"size-6"} src={IconPswShow}/>}
          </Button>
        }
      />

      <label htmlFor="password" className="text-white text-[16px] block text-sm font-medium text-black-900">
        Nuova Password
      </label>
      <Input
        id="password"
        type={passwordNewVisible ? "text" : "password"}
        autoComplete="new-password"
        required
        ref={passwordInput}
        value={data.password}
        onChange={(e) => setData("password", e.target.value)}
        error={errors.password}
        errorMessage={errors.password}
        endContent={
          <Button variant="light" size="sm" onPress={() => setPasswordNewVisible(!passwordNewVisible)} isIconOnly>
            {passwordNewVisible ? <img className={"size-6"} src={IconPswHide}/> : <img className={"size-6"} src={IconPswShow}/>}
          </Button>
        }
      />

      <label htmlFor="password_confirmation" className="text-white text-[16px] block text-sm font-medium text-black-900">
        Conferma nuova Password
      </label>
      <Input
        id="password_confirmation"
        type={passwordConfirmNewVisible ? "text" : "password"}
        autoComplete="new-password"
        required
        value={data.password_confirmation}
        onChange={(e) => setData("password_confirmation", e.target.value)}
        error={errors.password_confirmation}
        errorMessage={errors.password_confirmation}
        endContent={
          <Button variant="light" size="sm" onPress={() => setPasswordConfirmNewVisible(!passwordConfirmNewVisible)} isIconOnly>
            {passwordConfirmNewVisible ? <img className={"size-6"} src={IconPswHide}/> : <img className={"size-6"} src={IconPswShow}/>}
          </Button>
        }
      />

      <div className="flex justify-end gap-4">
        <Button
          color="primary"
          type="submit"
          disabled={processing}
          className="flex justify-end pr-0"
          endContent={<img src={IconSave} alt="Salva" className="size-8"/>}
        >

        </Button>

        <Transition
          show={recentlySuccessful}
          enter="transition ease-in-out"
          enterFrom="opacity-0"
          leave="transition ease-in-out"
          leaveTo="opacity-0"
        >
          <p className="text-sm text-green-700">Password modificata.</p>
        </Transition>
      </div>
    </form>
  );
}
