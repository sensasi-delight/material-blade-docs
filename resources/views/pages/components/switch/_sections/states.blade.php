<section>
    <x-h2>Switch States</x-h2>

    <x-mbc::typography>
        Switches can be in two states: off (unselected) or on (selected). Use the <code>:on="true"</code> prop to set the initial state to on.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 3rem; align-items: center; flex-wrap: wrap;">
            <div style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem;">
                <x-mbc::switch aria-label="Switch off state" />
                <x-mbc::typography variant="caption">Off (Default)</x-mbc::typography>
            </div>

            <div style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem;">
                <x-mbc::switch :on="true" aria-label="Switch on state" />
                <x-mbc::typography variant="caption">On (Selected)</x-mbc::typography>
            </div>
        </div>

        @slot('code')
            @include('pages.components.switch._codes.states')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Use Case:</strong> Use switches for settings that take immediate effect, like enabling/disabling features or toggling options.
    </x-mbc::typography>
</section>
