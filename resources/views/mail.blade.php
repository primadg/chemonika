<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        *{font-family: 'Ubuntu', sans-serif;}
    </style>
</head>
<body style="margin: 0; padding: 0;" align="center">
<tr>
    <td>
        <table class="table600" style="max-width: 600px; width: 100%;margin-left: auto;margin-right: auto;" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff">
            <tr>
                <td>
                    <table class="table600" cellpadding="0" style="padding-left: 24px; padding-right: 24px;max-width: 600px; width: 100%;" cellspacing="0" align="center" bgcolor="#ffffff" height="80">
                        <tr>
                            <td style="text-align: left;">
                                <img src="{{$message->embed(env('APP_URL').'/mail/logo.png')}}"  alt="logo"/>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="padding-left: 24px; padding-right: 24px; padding-bottom: 64px;max-width: 600px; width: 100%;" class="table600" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff">
                        <tr>
                            <td style="padding-top: 54px;font-size: 24px;line-height: 130%;color: #263640; text-align: left;">
                                Вам пришло сообщение с сайта
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 30px;font-size: 16px;line-height: 28px;color: #929A9F; text-align: left;">
                                Пользователь: <span style="color: #263640;">{{$name}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 16px;font-size: 16px;line-height: 28px;color: #929A9F; text-align: left;">
                                Контакты: <span style="color: #263640;">{{$contacts}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 30px;font-size: 16px;line-height: 28px;color: #929A9F; text-align: left;">
                                Сообщение:
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 10px;font-size: 16px;line-height: 130%;color: #263640; text-align: justify; ">
                            {{$text}}
                              </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 30px;font-size: 16px;line-height: 28px;color: #929A9F; text-align: left;">
                                Дата: {{date("i:H m-d-y")}}
                            </td>
                        </tr>
                        <tr>
{{--                            <td style="padding-top: 20px; text-align: center;">--}}
{{--                                <a style="font-size: 16px;line-height: 130%;padding-top: 10px; margin-top: 10px;color: #263640;padding-top: 10px;text-decoration: none;" href="mailto:someone@yoursite.com">--}}
{{--                                    pochta@email.com--}}
{{--                                </a>--}}
{{--                            </td>--}}
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
</body>
</html>
