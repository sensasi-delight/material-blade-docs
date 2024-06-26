<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} &mdash; {{ config('app.name') }}</title>

    <link href="https://unpkg.com/prismjs@v1.x/themes/prism-tomorrow.css" rel="stylesheet" />
    <x-mbc::_assets />

    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
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

        section {
            margin-bottom: 32px;
        }

        .right-sidebar {
            padding: calc(2 * var(--mbc-theme-scaling-factor));
            padding-top: calc(10 * var(--mbc-theme-scaling-factor));
        }

        .right-sidebar a {
            margin: 0 !important;
            height: fit-content !important;
        }
    </style>
</head>

<body>
    <x-mbc::drawer subtitle="Documentation">
        <x-slot:title>
            <a href="{{ route('index') }}" style="color: inherit; text-decoration: none;">Material Blade</a>
        </x-slot:title>

        <x-mbc::list element="nav" dense>
            @php
                $docRoutes = collect(App\Enums\DocRoute::cases())
                    ->map(function ($routeEnum) {
                        return $routeEnum->value;
                    })
                    ->groupBy(function ($route) {
                        return explode('.', $route)[0];
                    });
            @endphp
            @foreach ($docRoutes as $section => $routes)
                @if ($routes->count() > 1)
                    <x-mbc::typography class="mbc-px-2" style="text-transform: uppercase; font-weight: bold;"
                        variant="caption" disableGutter element="div">
                        {{ ucfirst($section) }}
                    </x-mbc::typography>
                @endif

                @foreach ($routes as $route)
                    <x-mbc::list-item href="{{ route($route) }}" element="a" :activated="request()->route()->named($route)">
                        {{ ucfirst(str_replace('-', ' ', str_replace("{$section}.", '', $route))) }}
                    </x-mbc::list-item>
                @endforeach
            @endforeach
        </x-mbc::list>
    </x-mbc::drawer>


    <main class="mbc-m-4" style="flex-grow: 1;">
        <section>
            <x-h1>
                {{ $title }}
            </x-h1>

            <div style="margin-bottom: 48px;">
                @yield('description')
            </div>

            @yield('content')
        </section>

        @isset($props)
            <x-component-props-section :data="$props" />
        @endisset

        @isset($referenceLinks)
            <x-references-section :links="$referenceLinks" />
        @endisset
    </main>

    <x-mbc::drawer class="right-sidebar">
        <x-mbc::typography style="font-weight: bold;" disableGutter>
            Contents
        </x-mbc::typography>

        <x-mbc::list>
            <li>
                <x-mbc::list-item href="#" element="a" activated>
                    Home
                </x-mbc::list-item>
            </li>

            <li>
                <x-mbc::list-item href="#" element="a">
                    Documentation
                </x-mbc::list-item>
            </li>
        </x-mbc::list>
    </x-mbc::drawer>

    <script src="https://unpkg.com/prismjs@v1.x/components/prism-core.min.js"></script>
    <script src="https://unpkg.com/prismjs@v1.x/plugins/autoloader/prism-autoloader.min.js"></script>
</body>

</html>
