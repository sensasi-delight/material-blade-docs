<section>
    <x-h2>Colors</x-h2>

    <x-mbc::typography>
        Checkboxes support different colors from the Material Design theme. You can set the color using the <code>color</code> attribute. The default color is <code>primary</code>.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 0.5rem;">
            <x-mbc::checkbox label="Primary (default)" color="primary" checked />
            <x-mbc::checkbox label="Secondary" color="secondary" checked />
            <x-mbc::checkbox label="Error" color="error" checked />
            <x-mbc::checkbox label="Warning" color="warning" checked />
            <x-mbc::checkbox label="Info" color="info" checked />
            <x-mbc::checkbox label="Success" color="success" checked />
        </div>

        @slot('code')
            @include('pages.components.checkbox._codes.colors')
        @endslot
    </x-component-preview>
</section>
