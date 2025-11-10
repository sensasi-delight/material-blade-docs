<section>
    <x-h2>Disabled State</x-h2>

    <x-mbc::typography>
        Disable switches using the <code>disabled</code> attribute. Disabled switches cannot be interacted with and have reduced opacity.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 3rem; align-items: center; flex-wrap: wrap;">
            <div style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem;">
                <x-mbc::switch disabled aria-label="Disabled switch off" />
                <x-mbc::typography variant="caption">Disabled (Off)</x-mbc::typography>
            </div>

            <div style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem;">
                <x-mbc::switch :on="true" disabled aria-label="Disabled switch on" />
                <x-mbc::typography variant="caption">Disabled (On)</x-mbc::typography>
            </div>

            <div style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem;">
                <x-mbc::switch 
                    icon="check" 
                    offIcon="close"
                    disabled 
                    aria-label="Disabled switch with icons off"
                />
                <x-mbc::typography variant="caption">Disabled with Icons (Off)</x-mbc::typography>
            </div>

            <div style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem;">
                <x-mbc::switch 
                    :on="true"
                    icon="check" 
                    offIcon="close"
                    disabled 
                    aria-label="Disabled switch with icons on"
                />
                <x-mbc::typography variant="caption">Disabled with Icons (On)</x-mbc::typography>
            </div>
        </div>

        @slot('code')
            @include('pages.components.switch._codes.disabled')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Use Case:</strong> Use disabled switches to show settings that are unavailable due to permissions, feature locks, or dependencies on other settings.
    </x-mbc::typography>
</section>
