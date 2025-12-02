@php
    $appName = render_setting("app_name");
    $logo = render_setting("logo");
    $author = render_setting("author", true);
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Email Verification</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    body {
        margin: 0;
        padding: 0;
        background: #f8f9fc;
        font-family: Arial, Helvetica, sans-serif;
        color: #222;
    }
    .container {
        max-width: 600px;
        margin: 40px auto;
        background: #ffffff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 3px 12px rgba(0,0,0,0.05);
    }
    .header {
        text-align: center;
        padding: 25px 0;
        background: #111;
    }
    .header img {
        max-height: 50px;
    }
    .content {
        padding: 40px 35px;
    }
    h1 {
        font-size: 24px;
        margin-bottom: 20px;
        color: #111;
    }
    p {
        line-height: 1.6;
        margin-bottom: 20px;
        color: #333;
    }
    .btn {
        display: inline-block;
        padding: 14px 28px;
        background: #111;
        color: #fff !important;
        border-radius: 6px;
        text-decoration: none;
        font-size: 16px;
        margin: 20px 0;
    }
    .btn:hover {
        opacity: .9;
    }
    .footer {
        text-align: center;
        padding: 20px;
        font-size: 12px;
        color: #777;
    }
    .footer a {
        color: #777;
        text-decoration: underline;
    }
    .fallback-url {
        word-break: break-all;
        font-size: 13px;
        color: #444;
    }
</style>
</head>
<body>

<div class="container">

    <div class="header">
        @if($logo)
            <img src="{{ asset($logo) }}" alt="{{ $appName }}">
        @else
            <h2 style="color:white; margin:0;">{{ $appName }}</h2>
        @endif
    </div>

    <div class="content">
        <h1>Verify Your Email</h1>

        <p>Hello,</p>

        <p>Thank you for creating an account at <strong>{{ $appName }}</strong>. Please confirm your email by clicking the button below:</p>

        <a href="{{ $url }}" class="btn">Verify Email</a>

        <p>If the button doesn’t work, copy and paste the URL below into your browser:</p>

        <p class="fallback-url">{{ $url }}</p>

        <p>If you didn’t create this account, you can safely ignore this email.</p>
    </div>

    <div class="footer">
        © {{ date('Y') }} {{ $appName }} — All rights reserved.<br>
        Developed by {!! $author !!}
    </div>
</div>

</body>
</html>
