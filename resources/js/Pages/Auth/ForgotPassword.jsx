import GuestLayout from "@/Layouts/GuestLayout.jsx";
import {Head, Link, router, useForm} from "@inertiajs/react";
import {Button, Input, Spacer} from "@heroui/react";
import React from "react";
import {IconMail} from "@tabler/icons-react";
import iconBack from "../../../../public/icons/png/icon-back.png";

export default function ForgotPassword({status}) {
  const {data, setData, post, processing, errors} = useForm({
    email: "",
  });

  const submit = () => {
    post(route("password.email"));
  };

  return (
    <>
      <Head title="Me.Gio.Cri"/>

      <div className="mb-4 flex flex-col items-left">
        <div className="flex items-center space-x-4 mb-6">
          <div>
            <p className="text-2xl font-medium">Forgot password?</p>
          </div>
        </div>
        <p>No problem. Provide us your activation email address and we will send you a link to reset your password.</p>
        <Spacer y={2}/>
        <p>Check your inbox and follow the instructions.</p>
      </div>

      <form>

        <div className={"mb-4"}>
          <label htmlFor="email" className="block text-sm font-medium text-black-900">
            Activation email
          </label>
          <Spacer y={2}/>
          <Input
            placeholder=""
            type="email"
            autoComplete="username"
            classNames={{inputWrapper: "bg-gray-200 group-data-[hover=true]:bg-gray-200 group-data-[focus=true]:bg-gray-200  "}}
            /*startContent={<IconMail/>}*/
            value={data.email}
            onChange={(e) => setData("email", e.target.value)}
            isInvalid={!!errors.email}
            errorMessage={errors.email}
          />
        </div>

          {status && <div className="mt-2 font-medium text-sm text-success">{status}</div>}

        <div className="mt-5 flex flex-col sm:flex-row gap-1 justify-end">
          <div className="flex flex-col sm:flex-row gap-1 ml-auto">
            <Button color="primary" onPress={submit} disabled={processing}>
              Send
            </Button>
          </div>
        </div>
      </form>
    </>
);
}

ForgotPassword.layout = (page) =>
  <GuestLayout children={page}/>
;
