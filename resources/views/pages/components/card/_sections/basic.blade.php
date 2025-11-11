<section>
    <x-h2>Basic</x-h2>

    <x-mbc::typography>
        The basic card component can be used with minimal setup. You can add content directly or use the card sub-components like <code>mbc::card-header</code> and <code>mbc::card-content</code> for better structure.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
            <x-mbc::card style="width: 300px; padding: 16px;">
                <x-mbc::typography variant="h6">Simple Card</x-mbc::typography>
                <x-mbc::typography variant="body2">
                    This is a simple card with plain content.
                </x-mbc::typography>
            </x-mbc::card>

            <x-mbc::card style="width: 300px;">
                <x-mbc::card-header title="Card with Header" subtitle="With subtitle" />
                <x-mbc::card-content>
                    This card uses the card-header and card-content components.
                </x-mbc::card-content>
            </x-mbc::card>
        </div>

        @slot('code')
            @include('pages.components.card._codes.basic')
        @endslot
    </x-component-preview>
</section>
