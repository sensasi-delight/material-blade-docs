<!DOCTYPE html>
<html lang="en">

@include('layouts.docs.parts.head', [
    'title' => $title,
    ...$metas,
])

<body>
    @include('layouts.docs.parts.nav')

    <main class="mbc-my-4">
        <section>
            <x-h1>
                {{ $title }}
            </x-h1>

            <div style="margin-bottom: 48px;">
                @yield('description')
            </div>

            @yield('content')

            @isset($componentsProps)
                <x-component-props-section :componentsProps="$componentsProps" />
            @endisset

            @isset($referenceLinks)
                <x-references-section :links="$referenceLinks" />
            @endisset
        </section>

        <div class="mbc-mt-8">
            <x-mbc::button
                href="https://github.com/sensasi-delight/material-blade-docs/tree/main/resources/views/pages/{{ Route::current()->uri }}/index.blade.php"
                label="Edit this page" variant="outlined" endIcon="open_in_new" target="_blank"
                rel="noopener noreferrer nofollow" />
        </div>
    </main>

    @include('layouts.docs.parts.toc', [
        'headings' => $headings,
        'componentsProps' => $componentsProps ?? null,
        'referenceLinks' => $referenceLinks ?? null,
    ])

    <script src="https://unpkg.com/prismjs@v1.x/components/prism-core.min.js"></script>
    <script src="https://unpkg.com/prismjs@v1.x/plugins/autoloader/prism-autoloader.min.js"></script>

    @stack('scripts')
</body>

</html>
