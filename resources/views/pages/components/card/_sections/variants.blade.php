<section>
    <x-h2>Variants</x-h2>

    <x-mbc::typography>
        Cards support two variants: <code>elevated</code> (default) and <code>outlined</code>. The elevated variant has a shadow, while the outlined variant has a border.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
            <x-mbc::card style="width: 250px;">
                <x-mbc::card-header title="Elevated Card" subtitle="Default variant" />
                <x-mbc::card-content>
                    This is an elevated card with shadow.
                </x-mbc::card-content>
            </x-mbc::card>

            <x-mbc::card variant="outlined" style="width: 250px;">
                <x-mbc::card-header title="Outlined Card" subtitle="With border" />
                <x-mbc::card-content>
                    This is an outlined card with border.
                </x-mbc::card-content>
            </x-mbc::card>
        </div>

        @slot('code')
            @include('pages.components.card._codes.variants')
        @endslot
    </x-component-preview>
</section>
