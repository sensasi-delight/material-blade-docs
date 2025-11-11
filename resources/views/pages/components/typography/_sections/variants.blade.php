<section>
    <x-h2>Variants</x-h2>

    <x-mbc::typography>
        Typography supports various variants that follow Material Design typography system. Each variant has its own style and semantic meaning.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 1rem;">
            <x-mbc::typography variant="h1">Heading 1</x-mbc::typography>
            <x-mbc::typography variant="h2">Heading 2</x-mbc::typography>
            <x-mbc::typography variant="h3">Heading 3</x-mbc::typography>
            <x-mbc::typography variant="h4">Heading 4</x-mbc::typography>
            <x-mbc::typography variant="h5">Heading 5</x-mbc::typography>
            <x-mbc::typography variant="h6">Heading 6</x-mbc::typography>
            <x-mbc::typography variant="subtitle1">Subtitle 1</x-mbc::typography>
            <x-mbc::typography variant="subtitle2">Subtitle 2</x-mbc::typography>
            <x-mbc::typography variant="body1">Body 1 text</x-mbc::typography>
            <x-mbc::typography variant="body2">Body 2 text</x-mbc::typography>
            <x-mbc::typography variant="button">BUTTON TEXT</x-mbc::typography>
            <x-mbc::typography variant="caption">Caption text</x-mbc::typography>
            <x-mbc::typography variant="overline">OVERLINE TEXT</x-mbc::typography>
        </div>

        @slot('code')
            @include('pages.components.typography._codes.variants')
        @endslot
    </x-component-preview>
</section>
