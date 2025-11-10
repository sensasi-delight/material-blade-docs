<section>
    <x-h2>Switch with Icons</x-h2>

    <x-mbc::typography>
        Add icons to switches to provide additional visual context. Use <code>icon</code> for the ON state and <code>offIcon</code> for the OFF state.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 3rem; align-items: center; flex-wrap: wrap;">
            <div style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem;">
                <x-mbc::switch 
                    icon="check" 
                    offIcon="close"
                    aria-label="Toggle with icons"
                />
                <x-mbc::typography variant="caption">Check/Close Icons</x-mbc::typography>
            </div>

            <div style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem;">
                <x-mbc::switch 
                    :on="true"
                    icon="check" 
                    offIcon="close"
                    aria-label="Toggle with icons on"
                />
                <x-mbc::typography variant="caption">Icons (On State)</x-mbc::typography>
            </div>

            <div style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem;">
                <x-mbc::switch 
                    icon="done" 
                    aria-label="Toggle with single icon"
                />
                <x-mbc::typography variant="caption">Single Icon (On Only)</x-mbc::typography>
            </div>

            <div style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem;">
                <x-mbc::switch 
                    :on="true"
                    icon="done" 
                    aria-label="Toggle with single icon on"
                />
                <x-mbc::typography variant="caption">Single Icon (On)</x-mbc::typography>
            </div>
        </div>

        @slot('code')
            @include('pages.components.switch._codes.icons')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Icons help users understand what the switch controls. Use icons that clearly represent the on/off states.
    </x-mbc::typography>
</section>
