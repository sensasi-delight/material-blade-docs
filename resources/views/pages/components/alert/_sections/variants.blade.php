<section>
    <x-h2>Variants</x-h2>

    <x-mbc::typography>
        Alerts can be displayed in three different variants: `standard`, `outlined`, and `filled`.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 0.5rem; flex-direction: column;">
            <x-mbc::alert variant="standard">The default variant is `standard`</x-mbc::alert>
            <x-mbc::alert variant="outlined">This is an `outlined` Alert.</x-mbc::alert>
            <x-mbc::alert variant="filled">This is a `filled` Alert.</x-mbc::alert>
        </div>

        @slot('code')
            @include('pages.components.alert._codes.variants')
        @endslot
    </x-component-preview>
</section>
