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
        * {
            font-family: 'Ubuntu', sans-serif;
        }
    </style>
</head>
<body style="margin: 0; padding: 0;">
<tr>
    <td>
        <table class="table600" style="max-width: 600px; width: 100%;" cellpadding="0" cellspacing="0" align="center"
               bgcolor="#ffffff">
            <tr>
                <td>
                    <table class="table600" cellpadding="0"
                           style="padding-left: 24px; padding-right: 24px;max-width: 600px; width: 100%;"
                           cellspacing="0" align="center" bgcolor="#ffffff" height="80">
                        <tr>
                            <td>
                                <img
                                    src="{{$message->embed(env('APP_URL').'/mail/logo.png')}}"  alt="logo"/>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table
                        style="padding-left: 24px; padding-right: 24px; padding-bottom: 64px;max-width: 600px; width: 100%;"
                        class="table600" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff">
                        <tr>
                            <td style="padding-top: 54px;font-size: 24px;line-height: 130%;color: #263640;">
                                Приветствую, {{$name}}!
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 30px;font-size: 16px;line-height: 28px;color: #929A9F;">
                                Вам пришло сообщение с сайта
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 10px;font-size: 16px;line-height: 130%;color: #263640;">
                                {{$text}}
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 30px;font-size: 16px;line-height: 28px;color: #929A9F;">
                                Контакты пользователя
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a style="font-size: 16px;line-height: 130%;display: flex;color: #263640;text-decoration: none;"
                                   href="tel: +380975555555">
                                    +38 097 555 55 55
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a style="font-size: 16px;line-height: 130%;display: flex;color: #263640;padding-top: 10px;text-decoration: none;"
                                   href="mailto:someone@yoursite.com">
                                    pochta@email.com
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 47px;">
                                <a style="text-decoration: none;padding-top: 10px;padding-right: 25px;padding-bottom: 10px;padding-left: 25px;background: #219653;text-align: center;font-size: 16px;line-height: 40px;color: #FFFFFF;"
                                   href="mailto:someone@yoursite.com">
                                    Ответить
                                    <img style="padding-left: 5px;"
                                         src="{{$message->embed(env('APP_URL').'/mail/chev.png')}}" alt="arrow">
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table
                        style="padding-top: 33px;padding-bottom: 33px;padding-left: 24px;padding-right: 24px;max-width: 600px; width: 100%;"
                        class="table600" cellpadding="0" cellspacing="0" align="center" bgcolor="#263640">
                        <tr>
                            <td>
                                <img
                                    src="{{$message->embed(env('APP_URL').'/mail/logo_footer.png')}}" alt="logo"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 33px;font-weight: bold;font-size: 14px;line-height: 16px;letter-spacing: 1.75px;text-transform: uppercase;color: #FFFFFF;">
                                наші соціальні мережі
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 15px;">
                                <a href="#" style="text-decoration: none;">
                                    <img
                                        src="{{$message->embed(env('APP_URL').'/mail/tg.png')}}" alt="telegram">
                                </a>
                                <a href="#" style="text-decoration: none;margin-left: 30px;margin-right: 30px;">
                                    <img
                                        src="{{$message->embed(env('APP_URL').'/mail/skype.png')}}" alt="skype">
                                </a>
                                <a href="#" style="text-decoration: none;">
                                    <img
                                        src="{{$message->embed(env('APP_URL').'/mail/fb.png')}}"alt="fb">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 30px;font-weight: bold;font-size: 14px;line-height: 16px;letter-spacing: 1.75px;text-transform: uppercase;color: #FFFFFF;">
                                АДРЕСА
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 10px;font-size: 16px;line-height: 28px;color: #FFFFFF;">
                                2464 Royal Ln. Mesa, New Jersey 454a63
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 8px;">
                                <span style="font-size: 14px;line-height: 16px;color: #E1E8EE;">2021</span><span
                                    style="font-size: 14px;line-height: 16px;color: #E1E8EE; padding-left: 4px; padding-right: 4px;">|</span><span
                                    style="font-size: 14px;line-height: 16px;color: #E1E8EE;">All rights protected</span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
</body>
</html>
