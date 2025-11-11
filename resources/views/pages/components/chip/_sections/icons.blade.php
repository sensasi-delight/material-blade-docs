<section>
    <x-h2>Chips with Icons</x-h2>

    <x-mbc::typography>
        Chips can include leading icons to provide visual context. Use the <code>icon</code> prop with a Material Icons name.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::chip-set>
            <x-mbc::chip label="Home" icon="home" />
            <x-mbc::chip label="Favorite" icon="favorite" />
            <x-mbc::chip label="Settings" icon="settings" />
            <x-mbc::chip label="Person" icon="person" />
            <x-mbc::chip label="Email" icon="email" />
        </x-mbc::chip-set>

        @slot('code')
            @include('pages.components.chip._codes.icons')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Icons help users quickly identify the purpose or category of a chip.
    </x-mbc::typography>
</section>
