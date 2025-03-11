import React, {useState} from "react";
import {Head, router, useForm, usePage} from "@inertiajs/react";
import {Button, Checkbox, Input, Spacer} from "@nextui-org/react";
import IconPswHide from "../../../../public/icons/png/icon-visibility-off.png";
import IconPswShow from "../../../../public/icons/png/icon-visibility-on.png";
import LoginLayout from "@/Layouts/LoginLayout.jsx";

export default function Login({status}) {
  const {data, setData, post, processing, errors, reset, setError} = useForm({
    email: "",
    password: "",
    remember: false,
  });

  const { message } = usePage().props;

  const login = (e) => post(route("login"));

  const forgot_password = (e) => get(route("password.request"))

  const [passwordVisible, setPasswordVisible] = useState(false);

  return (
    <>
      <Head title="Teikei"/>

      <div className={"flex flex-col"}>
        <p className={"text-2xl font-bold leading-10"}>Log into your account</p>
        <p>Enter activation email and password to manage your TCard.</p>
      </div>

      {message && (
        <div className="mb-4 text-green-700 rounded text-base">
          {message}
        </div>
      )}

      <form>
        <p className="text-success font-medium text-sm">{status}</p>

        <Spacer y={10}/>

        <div className={"mb-4"}>
          <label htmlFor="email" className="block text-sm font-medium text-black-900">
            Email
          </label>
          <Spacer y={2}/>
          <Input
            placeholder=""
            type="email"
            autoComplete="username"
            classNames={{inputWrapper: "bg-gray-200 group-data-[hover=true]:bg-gray-200 group-data-[focus=true]:bg-gray-200 "}}
            //startContent={<IconMail/>}
            value={data.email}
            onChange={(e) => setData("email", e.target.value)}
            isInvalid={!!errors.email}
            errorMessage={errors.email}
          />
        </div>

        <Spacer y={4}/>
        <div className={"mb-4"}>
          <label htmlFor="password" className="block text-sm font-medium text-black-900">
            Password
          </label>
          <Spacer y={2}/>
          <Input
            type={passwordVisible ? "text" : "password"}
            autoComplete="current-password"
            placeholder={""}
            classNames={{inputWrapper: "bg-gray-200 group-data-[hover=true]:bg-gray-200 group-data-[focus=true]:bg-gray-200  "}}
            //startContent={<IconLock/>}
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
        </div>

        <div className="mt-5 sm:mt-5 flex gap-3 sm:gap-10 justify-between select-none">
          <div className="flex flex-col sm:flex-row gap-1 flex-grow">
            <Checkbox className={"checkbox-wrapper"} name="remember" value={data.remember}
                      onChange={(e) => setData("remember", e.target.checked)}>
              Remember me
            </Checkbox>
          </div>

          <div className="flex flex-col sm:flex-row gap-1 ps_button_link">
            <Button className={"ps_button_link px-0 text-lg bg-white"} onPress={login} disabled={processing}>
              Login
            </Button>
          </div>
        </div>

        <Button className={"px-0 flex underline bg-white ps_button_link"}
                onPress={() => router.visit(route("password.request"))}>
          Forgot password?
        </Button>


      </form>

      <Spacer y={10}/>

      {/*<div className={"flex flex-col"}>
        <h2>Non hai un account?</h2>
        <p><a className={"ps-link-a text-sm/[25px]"} href="/register">Registrati!</a></p>
      </div>*/}

    </>
  );
}

Login.layout = (page) =>
  <LoginLayout children={page}/>
;
