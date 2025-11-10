<section>
    <x-h2>Headings</x-h2>

    <x-mbc::typography>
        The heading variants (h1-h6) are automatically rendered as their corresponding HTML heading elements.
        These variants follow Material Design's typographic hierarchy.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 0.5rem; flex-direction: column;">
            <x-mbc::typography variant="h1">h1. Heading</x-mbc::typography>
            <x-mbc::typography variant="h2">h2. Heading</x-mbc::typography>
            <x-mbc::typography variant="h3">h3. Heading</x-mbc::typography>
            <x-mbc::typography variant="h4">h4. Heading</x-mbc::typography>
            <x-mbc::typography variant="h5">h5. Heading</x-mbc::typography>
            <x-mbc::typography variant="h6">h6. Heading</x-mbc::typography>
        </div>

        @slot('code')
            @include('pages.components.typography._codes.headings')
        @endslot
    </x-component-preview>
</section>
