@php
    $pageData = [
        'title' => 'Getting Started',
        'metas' => [
            'description' =>
                'Material Blade is a simple package that provides the beautifulness of Google Material Design components as Laravel Blade components. Material Blade aims to make UI/UX development of your Laravel app faster, inspired by Material UI.',
        ],
        'referenceLinks' => [
            'https://m2.material.io',
            'https://mui.com/material-ui/',
            'https://material-components.github.io/material-web/demos/',
            'https://material-components.github.io/material-components-web-catalog/',
            'https://github.com/material-components/material-components-web/tree/v14.0.0',
        ],
        'headings' => ['Installation', 'Contributing', 'License', 'Contact'],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>
        Material Blade is a simple package that provides the beautifulness of <x-new-tab-anchor
            href="https://material.io">Material Design components</x-new-tab-anchor> as <x-new-tab-anchor
            href="https://laravel.com/docs/blade#components">Laravel
            Blade components</x-new-tab-anchor>. Material Blade aims to
        make
        UI/UX development of your Laravel app faster, inspired by <x-new-tab-anchor href="https://mui.com/material-ui/">MUI
            (Material
            UI)</x-new-tab-anchor>.
    </x-mbc::typography>

    <x-mbc::alert title="Warning" severity="warning">
        This package is still in development. The components and features are limited and may not be suitable for
        production use.
    </x-mbc::alert>

    <x-component-preview>
        @slot('codeSummary')
            {{-- prettier-ignore-start --}}
// from this
&lt;button class="mdc-button">
    &lt;span class="mdc-button__ripple">&lt;/span>
    &lt;span class="mdc-button__label">
        This is a Button
    &lt;/span>
&lt;/button>

// to this
&lt;x-mbc::button label="This is a Button"/>
            {{-- prettier-ignore-end --}}
        @endslot
    </x-component-preview>

    <x-mbc::typography>
        General knowledge of Laravel and Blade components i'ts required for using this package. However, the fully
        understand about this feature is helpful for optimizing the usages of this package. If you never heard about <a
            href="https://laravel.com/docs/blade#components" target="_blank">
            Laravel
            Blade components <x-mbc::icon name="open_in_new" style="font-size: inherit" /></a>, it is a good start to
        understand it and plays with Material Blade package.
    </x-mbc::typography>
@endsection

@section('content')
    <section>
        <x-h2>Installation</x-h2>

        <x-mbc::typography>
            Material Blade is available on <a href="https://packagist.org/packages/sensasi-delight/material-blade"
                target="_blank">Packagist <x-mbc::icon name="open_in_new" style="font-size: inherit" /></a>. You can
            install
            it via Composer by running the following command in your Laravel project:
        </x-mbc::typography>

        <pre class="src-code show"><code class="language-bash">composer require sensasi-delight/material-blade</code></pre>

        <x-mbc::typography>
            After installing the Material Blade package, you can start using the components by including the
            <code>&lt;x-mbc::_assets /></code> component in your Blade layout file. This component will include the
            Material
            Components
            Web CSS and JavaScript files.
        </x-mbc::typography>

        <x-component-preview lang="html">
            @slot('codeSummary')
                {{-- prettier-ignore-start --}}
&lt;!DOCTYPE html>
&lt;html lang="en">

&lt;head>
    &lt;meta charset="UTF-8">
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0">
    &lt;meta http-equiv="X-UA-Compatible" content="ie=edge">
    &lt;title>Material Blade Example&lt;/title>

    &lt;!-- Material Blade required assets -->
    &lt;x-mbc::_assets />

&lt;/head>

&lt;body>

    &lt;!-- this is Material Blade component -->
    &lt;x-mbc::button label="This is a Button"/>

&lt;/body>

&lt;/html>
                {{-- prettier-ignore-end --}}
            @endslot
        </x-component-preview>

        <x-mbc::typography>
            You should now be able to use Material Blade components in your Laravel Blade views.
        </x-mbc::typography>
    </section>

    <section>
        <x-h2>
            Contributing
        </x-h2>

        <x-mbc::typography>
            If you would like to contribute to this project, please read the <a
                href="https://github.com/sensasi-delight/material-blade/blob/main/CONTRIBUTING.md"
                target="_blank">CONTRIBUTING.md <x-mbc::icon name="open_in_new" style="font-size: inherit" /></a> file.
        </x-mbc::typography>
    </section>

    <section>
        <x-h2>
            License
        </x-h2>

        <x-mbc::typography>
            Material Blade is open-source software licensed under the <a
                href="https://github.com/sensasi-delight/material-blade/blob/main/LICENSE" target="_blank">MIT license
                <x-mbc::icon name="open_in_new" style="font-size: inherit" /></a>.
        </x-mbc::typography>
    </section>

    <section>
        <x-h2>
            Contact
        </x-h2>

        <x-mbc::typography>
            If you have any questions or suggestions, please feel free to contact me at <a href="mailto:zainadam@gmail.com"
                target="_blank">zainadam@gmail.com <x-mbc::icon name="open_in_new" style="font-size: inherit" /></a>.
        </x-mbc::typography>

        <x-mbc::typography>
            You can also submit new issue on <a href="https://github.com/sensasi-delight/material-blade/issues/new"
                target="_blank">GitHub <x-mbc::icon name="open_in_new" style="font-size: inherit" /></a>.
        </x-mbc::typography>
    </section>
@endsection
