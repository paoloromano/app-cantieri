import React, {useEffect, useState} from "react";
import GuestLayout from "@/Layouts/GuestLayout.jsx";
import {Head, Link, useForm} from "@inertiajs/react";
import {Button, Input, Spacer} from "@heroui/react";
import {IconEye, IconEyeOff, IconLock, IconMail} from "@tabler/icons-react";
import IconPswHide from "../../../../public/icons/png/icon-visibility-off.png";
import IconPswShow from "../../../../public/icons/png/icon-visibility-on.png";
import iconBack from "../../../../public/icons/png/icon-back.png";

export default function ResetPassword({token, email}) {
  const {data, setData, post, processing, errors, reset} = useForm({
    token: token,
    email: email,
    password: "",
    password_confirmation: "",
  });

  useEffect(() => {
    return () => {
      reset("password", "password_confirmation");
    };
  }, []);

  const submit = () => post(route("password.store"));

  const [passwordVisible, setPasswordVisible] = useState(false);
  const [confirmPasswordVisible, setConfirmPasswordVisible] = useState(false);

  return (
    <>
      <Head title="Me.Gio.Cri"/>

      <div className="mb-4 flex flex-col items-left">
        <div className="flex items-center space-x-4 mb-6">
          <div>
            <p className="text-2xl font-medium">Change password</p>
          </div>
        </div>
        <p>Enter a new password of at least 10 characters, including uppercase, lowercase, numeric, and special characters.</p>
      </div>

      <form className="">
        <Input
          type="email"
          autoComplete="username"
          autoFocus
          classNames={{inputWrapper: "bg-gray-200 group-data-[hover=true]:bg-gray-200 group-data-[focus=true]:bg-gray-200"}}
          disabled
          value={data.email}
          onChange={(e) => setData("email", e.target.value)}
          isInvalid={!!errors.email}
          errorMessage={errors.email}
        />

        <Spacer y={4}/>

        <Input
          placeholder="New Password"
          type={passwordVisible ? "text" : "password"}
          autoComplete="new-password"
          classNames={{inputWrapper: "bg-gray-200 group-data-[hover=true]:bg-gray-200 group-data-[focus=true]:bg-gray-200"}}
          endContent={
            <Button variant="light" size="sm" onPress={() => setPasswordVisible(!passwordVisible)} isIconOnly>
              {passwordVisible ? <img className={"size-6"} src={IconPswHide}/> : <img className={"size-6"} src={IconPswShow}/>}
            </Button>
          }
          value={data.password}
          onChange={(e) => setData("password", e.target.value)}
          isInvalid={!!errors.password}
          errorMessage={errors.password}
        />

        <Spacer y={4}/>

        <Input
          placeholder="Confirm New Password"
          type={confirmPasswordVisible ? "text" : "password"}
          autoComplete="new-password"
          classNames={{inputWrapper: "bg-gray-200 group-data-[hover=true]:bg-gray-200 group-data-[focus=true]:bg-gray-200 "}}
          endContent={
            <Button variant="light" size="sm" onPress={() => setConfirmPasswordVisible(!confirmPasswordVisible)} isIconOnly>
              {confirmPasswordVisible ? <img className={"size-6"} src={IconPswHide}/> : <img className={"size-6"} src={IconPswShow}/>}
            </Button>
          }
          value={data.password_confirmation}
          onChange={(e) => setData("password_confirmation", e.target.value)}
          isInvalid={!!errors.password_confirmation}
          errorMessage={errors.password_confirmation}
        />

        <Spacer y={4}/>

        <div className="mt-5 flex flex-col sm:flex-row gap-1 justify-end">
          <div className="flex flex-col sm:flex-row gap-1 ml-auto">
            <Button color="primary" onPress={submit} disabled={processing}>
              Reset Password
            </Button>
          </div>
        </div>
      </form>
    </>
  );
}

ResetPassword.layout = (page) => <GuestLayout children={page}/>;
