import React, {useState, useEffect} from "react";
import {Head, router, useForm} from "@inertiajs/react";
import {Button, Checkbox, Input, Spacer} from "@nextui-org/react";
import GuestLayout from "@/Layouts/GuestLayout.jsx";
import {IconEye, IconEyeOff, IconLock, IconMail} from "@tabler/icons-react";
import IconPswHide from "../../../../public/icons/png/icon-visibility-off.png";
import IconPswShow from "../../../../public/icons/png/icon-visibility-on.png";

export default function Register({status}) {
  const {data, setData, post, processing, errors, reset, setError} = useForm({
    email: "",
    password: "",
    password_confirmation: "",
    privacy: false,
    slug: ""
  });

  const register = (e) => post(route("register"));

  const [passwordVisible, setPasswordVisible] = useState(false);
  const [confirmPasswordVisible, setConfirmPasswordVisible] = useState(false);

  useEffect(() => {
    const urlParams = new URLSearchParams(window.location.search);
    const slug = urlParams.get("slug");
    if (slug) {
      setData("slug", slug);
    }
  }, []);

  return (
    <>
      <Head title="Me.Gio.Cri"/>

      <div className={"flex flex-col"}>
        <h1>Create your account</h1>
        <p>To use your TCard, you need to <strong>create a new account</strong>.</p>
      </div>

      <Spacer y={10}/>

      <form>

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
            autoComplete="new-password"
            placeholder={""}
            classNames={{inputWrapper: "bg-gray-200 group-data-[hover=true]:bg-gray-200 group-data-[focus=true]:bg-gray-200 "}}
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

        <Spacer y={4}/>

        <div className={"mb-4"}>
          <label htmlFor="password_confirmation" className="block text-sm font-medium text-black-900">
            Confirm Password
          </label>
          <Spacer y={2}/>
          <Input
            type={confirmPasswordVisible ? "text" : "password"}
            autoComplete="new-password"
            placeholder={""}
            classNames={{inputWrapper: "bg-gray-200 group-data-[hover=true]:bg-gray-200 group-data-[focus=true]:bg-gray-200  "}}
            //startContent={<IconLock/>}
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
        </div>

        <Spacer y={4}/>

        <div className="mt-5 flex flex-wrap gap-3 justify-between select-none">
          <div className="flex flex-col w-full sm:w-1/2">
            <Checkbox
              required="required"
              name="privacy"
              value={data.privacy}
              onChange={(e) => setData("privacy", e.target.checked)}
              errorMessage={errors.privacy}
            >
              I have read and accept the terms of the <a className={"ps-link-a underline"} target={"_blank"} href={"https://www.iubenda.com/privacy-policy/20114804"}>Privacy Policy</a>
            </Checkbox>

            {errors.privacy && (
              <div className="text-red-600 text-sm mt-1">{errors.privacy}</div>
            )}
          </div>

          <div className="flex flex-col w-full sm:w-1/2 justify-end">
            <Button className={"text-lg ml-auto"} color="primary" onPress={register} disabled={processing}>
              Signin
            </Button>
          </div>
        </div>

        <input type="hidden" name="slug" value={data.slug}/>

      </form>
    </>
  );
}

Register.layout = (page) =>
  <GuestLayout children={page}/>
;
