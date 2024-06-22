<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Material Blade &mdash; @yield('title')</title>

    <link href="https://unpkg.com/prismjs@v1.x/themes/prism-tomorrow.css" rel="stylesheet" />
    <x-mbc::_assets />

    <style>
        :root {
            --mdc-theme-background: #F6F6FF;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: var(--mdc-theme-background);
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
        }

        .src-code.show {
            display: block;
        }
    </style>

    <title>Material Blade &mdash; @yield('title')</title>
</head>

<body style="display: flex;">
    <x-mbc::drawer />

    <main style="padding: 32px; flex-grow: 1;">
        @yield('main')
    </main>

    <x-mbc::drawer />


    <script src="https://unpkg.com/prismjs@v1.x/components/prism-core.min.js"></script>
    <script src="https://unpkg.com/prismjs@v1.x/plugins/autoloader/prism-autoloader.min.js"></script>
</body>

</html>