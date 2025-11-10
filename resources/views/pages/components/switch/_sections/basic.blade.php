<section>
    <x-h2>Basic Switch</x-h2>

    <x-mbc::typography>
        The simplest switch with no additional configuration. Switches are used to toggle settings on and off.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 3rem; align-items: center; flex-wrap: wrap;">
            <div style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem;">
                <x-mbc::switch aria-label="Notifications" />
                <x-mbc::typography variant="caption">Notifications</x-mbc::typography>
            </div>

            <div style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem;">
                <x-mbc::switch aria-label="Auto-save" />
                <x-mbc::typography variant="caption">Auto-save</x-mbc::typography>
            </div>

            <div style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem;">
                <x-mbc::switch aria-label="Dark mode" />
                <x-mbc::typography variant="caption">Dark mode</x-mbc::typography>
            </div>

            <div style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem;">
                <x-mbc::switch aria-label="Wi-Fi" />
                <x-mbc::typography variant="caption">Wi-Fi</x-mbc::typography>
            </div>
        </div>

        @slot('code')
            @include('pages.components.switch._codes.basic')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Best Practice:</strong> Always provide an <code>aria-label</code> or associate the switch with a visible label for accessibility.
    </x-mbc::typography>
</section>
