<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
    <style>
        @media only screen and (max-width: 600px) {

            .inner-body {
                width: 100% !important;
            }
        }

        .ps-email-title{
            font-size: 33px;
            font-weight: lighter;
            margin-top: 10px;
        }

        .ps-button{
            color: white !important;
            border-radius: 10px;
            border: none;
            margin-bottom: 20px;
            font-size: 19px;
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
    </style>
</head>
<body>

<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
        <td align="center">
            <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">

                <!-- Email Body -->
                <tr>
                    <td class="body" width="100%" cellpadding="0" cellspacing="0" style="border: hidden !important;">
                        <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                            <!-- Body content -->
                            <tr>
                                <td class="content-cell">

                                    <img src="https://app.nfcbusinesscard.it/build/assets/logo-teikei-norm-zz1defZw.png" class="logo" alt="NFC Business Card">
                                    <h1 class="ps-email-title">Reset Password</h1>

                                    <p><strong>Hello!</strong> <br>This email is to notify you that we have received a password reset request for your <strong>Me.Gio.Cri</strong> account.</p>

                                    <p></p><button class="ps-button button-blue"><a href="{{$url}}">Reset password</a></button></p>

                                    <p>This password reset link will <strong>expire in 60 minutes</strong>. If you did not request a password reset, ignore this email.</p>

                                    <p>See you soon. <br> The NFCBusinessCard Team</p>

                                    <hr />

                                    <p class="ps-footer">Se non riesci a cliccare sul pulsante “Resetta la password”, copia e incolla l’URL seguente nel tuo browser: <a class="link-footer" href="{{$url}}">{{$url}}</a></p>

                                    <p class="ps-footer">© 2024 NFC Business Card. <br>All rights reserved</p>

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>
</body>
</html>
