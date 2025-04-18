import React from 'react';
import {Head, usePage} from '@inertiajs/react';
import GuestLayout from '@/Layouts/GuestLayout.jsx';
import {Spacer} from '@heroui/react';

export default function VerifyEmail() {
  const { userEmail } = usePage().props;

  let userEmailFinal = userEmail;

  if (!userEmail){
    const getQueryParam = (param) => {
      const urlParams = new URLSearchParams(window.location.search);
      return urlParams.get(param);
    };

    userEmailFinal = getQueryParam('userEmail');
  }else{
    userEmailFinal = userEmail;
  }

  return (
    <>
      <Head title="Me.Gio.Cri"/>

      <div className={"flex flex-col"}>
        <h1>Activate your account</h1>
        <p>We have sent an email to the provided email address:</p>
        <Spacer y={2}/>
        <p><strong>{userEmailFinal}</strong></p>
        <Spacer y={2}/>
        <p>To activate your account, follow the instructions in the message. See you soon!</p>
      </div>

      <Spacer y={4}/>
    </>
  );
}

VerifyEmail.layout = (page) => <GuestLayout children={page}/>;
