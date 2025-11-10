<section>
    <x-h2>Specialized Variants</x-h2>

    <x-mbc::typography>
        Material Design provides specialized typography variants for specific use cases: <code>subtitle1</code> and
        <code>subtitle2</code> for subtitles, <code>button</code> for button text, <code>caption</code> for small
        explanatory text, and <code>overline</code> for labels and categories.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 0.5rem; flex-direction: column;">
            <x-mbc::typography variant="subtitle1">
                subtitle1. Lorem ipsum dolor sit amet
            </x-mbc::typography>
            <x-mbc::typography variant="subtitle2">
                subtitle2. Lorem ipsum dolor sit amet
            </x-mbc::typography>
            <x-mbc::typography variant="button">
                button text
            </x-mbc::typography>
            <x-mbc::typography variant="caption">
                caption text
            </x-mbc::typography>
            <x-mbc::typography variant="overline">
                overline text
            </x-mbc::typography>
        </div>

        @slot('code')
            @include('pages.components.typography._codes.specialized')
        @endslot
    </x-component-preview>
</section>
