<section>
    <x-h2>Chip States</x-h2>

    <x-mbc::typography>
        Chips support different states including selected, disabled, and with touch wrapper for better accessibility.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 1.5rem;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Selected State:</x-mbc::typography>
                <x-mbc::chip-set variant="filter">
                    <x-mbc::chip label="Not Selected" />
                    <x-mbc::chip label="Selected" :selected="true" />
                </x-mbc::chip-set>
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Disabled State:</x-mbc::typography>
                <x-mbc::chip-set>
                    <x-mbc::chip label="Enabled Chip" />
                    <x-mbc::chip label="Disabled Chip" :disabled="true" />
                </x-mbc::chip-set>
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>With Touch Wrapper (Better Touch Accessibility):</x-mbc::typography>
                <x-mbc::chip-set>
                    <x-mbc::chip label="Normal Chip" />
                    <x-mbc::chip label="Touch Chip" :withWrapper="true" />
                </x-mbc::chip-set>
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Combined States:</x-mbc::typography>
                <x-mbc::chip-set variant="filter">
                    <x-mbc::chip label="Selected with Icon" icon="check_circle" :selected="true" />
                    <x-mbc::chip label="Disabled with Icon" icon="block" :disabled="true" />
                    <x-mbc::chip label="Normal with Icon" icon="info" />
                </x-mbc::chip-set>
            </div>
        </div>

        @slot('code')
            @include('pages.components.chip._codes.states')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Note:</strong> Use the <code>withWrapper</code> prop to add a larger touch target for better mobile accessibility. Disabled chips cannot be interacted with and have reduced opacity.
    </x-mbc::typography>
</section>
