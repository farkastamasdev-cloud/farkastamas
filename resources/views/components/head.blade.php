<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <meta name="title" content="{{ config('app.name') }}">
    <meta name="description" content="Modern, mobilbarát weboldalkészítés és egyedi honlapkészítés cégeknek és magánszemélyeknek - kérj ajánlatot még ma!">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:description" content="Modern, mobilbarát weboldalkészítés és egyedi honlapkészítés cégeknek és magánszemélyeknek - kérj ajánlatot még ma!">
    <meta property="og:image" content="{{ config('app.url') }}/assets/images/og/og-image.jpg">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ config('app.url') }}">
    <meta property="twitter:title" content="{{ config('app.name') }}">
    <meta property="twitter:description" content="Modern, mobilbarát weboldalkészítés és egyedi honlapkészítés cégeknek és magánszemélyeknek - kérj ajánlatot még ma!">
    <meta property="twitter:image" content="{{ config('app.url') }}/assets/images/og/og-image.jpg">
    <!-- Favicon Link -->
    <link rel="icon" type="image/png" sizes="512x512" href="{{ config('app.url') }}/assets/images/favicon/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ config('app.url') }}/assets/images/favicon/android-chrome-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ config('app.url') }}/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ config('app.url') }}/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ config('app.url') }}/assets/images/favicon/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="{{ config('app.url') }}/assets/images/favicon/favicon.ico">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>