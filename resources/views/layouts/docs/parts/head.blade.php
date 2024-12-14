<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }} &mdash; {{ config('app.name') }}</title>

    {{-- TODO: add favicons --}}
    {{-- <link
        rel="icon"
        href="favicon-16.png"
        sizes="16x16"
        type="image/png"
    >

    <link
        rel="icon"
        href="favicon-32.png"
        sizes="32x32"
        type="image/png"
    >

    <link
        rel="icon"
        href="favicon-48.png"
        sizes="48x48"
        type="image/png"
    >

    <link
        rel="icon"
        href="favicon-62.png"
        sizes="62x62"
        type="image/png"
    >

    <link
        rel="icon"
        href="favicon-192.png"
        sizes="192x192"
        type="image/png"
    > --}}

    <meta name="description" content="{{ $description }}">

    <meta property="twitter:description" content="{{ $description }}">

    <meta name="referrer" content="unsafe-url">

    <meta name="robots" content="index,follow">

    <meta name="googlebot" content="index,follow">

    <link rel="canonical" href="{{ url()->current() }}">

    <meta name="application-name" content="{{ config('app.name') }}">

    <x-mbc::_assets />

    <link href="https://unpkg.com/prismjs@v1.x/themes/prism-tomorrow.css" rel="stylesheet" />

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        main {
            margin-right: calc(180px + 32px);
            margin-left: calc(256px + 32px);
        }

        @keyframes fade_in_show {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .src-code {
            display: none;
            margin: 0 !important;
            animation: fade_in_show 0.5s ease-in-out;
            border-radius: var(--mdc-shape-medium, 4px);
        }

        .src-code.show {
            display: block;
        }

        section {
            margin-bottom: 32px;
        }

        .right-sidebar {
            padding: calc(2 * var(--mbc-theme-scaling-factor));
            padding-top: calc(10 * var(--mbc-theme-scaling-factor));
            position: fixed;
            height: 100vh !important;
            width: 180px;
            top: 0;
            right: 0;
            overflow-y: auto;
        }

        .right-sidebar a {
            margin: 0 !important;
            height: fit-content !important;
        }

        h2,
        h3 {
            scroll-margin: 32px;
        }

        .header-anchor {
            color: inherit;
            text-decoration: none;
        }

        .header-anchor .material-icons {
            display: none;
            color: var(--mdc-theme-text-secondary-on-background);
        }

        h2:hover .material-icons,
        h3:hover .material-icons {
            display: inline-block;
        }
    </style>
</head>
