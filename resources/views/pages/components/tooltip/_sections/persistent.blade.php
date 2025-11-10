<section>
    <x-h2>Persistent Tooltip</x-h2>

    <x-mbc::typography>
        Persistent tooltips remain visible until explicitly dismissed. Set <code>persistent</code> to <code>true</code>. This only works with rich tooltips that have a <code>body</code> slot.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 2rem; align-items: center; padding: 2rem;">
            <x-mbc::tooltip :persistent="true">
                <x-mbc::button label="Show Persistent Tooltip" variant="raised" />

                <x-slot:title>Persistent Information</x-slot:title>
                <x-slot:body>
                    This tooltip stays open until you click outside or press Escape. It's useful for important information that users need to acknowledge.
                </x-slot:body>
                <x-slot:action>
                    <x-mbc::button label="Got It" variant="text" />
                </x-slot:action>
            </x-mbc::tooltip>
        </div>

        @slot('code')
            @include('pages.components.tooltip._codes.persistent')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Important:</strong> Persistent tooltips require a <code>body</code> slot and will throw an error if used with plain tooltips.
    </x-mbc::typography>
</section>
