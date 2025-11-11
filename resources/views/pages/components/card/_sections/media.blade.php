<section>
    <x-h2>Card with Media</x-h2>

    <x-mbc::typography>
        You can add images to cards using the <code>mbc::card-media</code> component. It supports different aspect ratios through the <code>variant</code> prop.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
            <x-mbc::card style="width: 300px;">
                <x-mbc::card-media src="https://material-components.github.io/material-components-web-catalog/static/media/photos/3x2/2.jpg" />
                <x-mbc::card-header title="Wide Media" subtitle="16:9 aspect ratio" />
                <x-mbc::card-content>
                    This card has a wide media image.
                </x-mbc::card-content>
            </x-mbc::card>

            <x-mbc::card style="width: 300px;">
                <x-mbc::card-media variant="square" src="https://material-components.github.io/material-components-web-catalog/static/media/photos/3x2/2.jpg" />
                <x-mbc::card-header title="Square Media" subtitle="1:1 aspect ratio" />
                <x-mbc::card-content>
                    This card has a square media image.
                </x-mbc::card-content>
            </x-mbc::card>
        </div>

        @slot('code')
            @include('pages.components.card._codes.media')
        @endslot
    </x-component-preview>
</section>
