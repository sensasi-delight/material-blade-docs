<section>
    <x-h2>Switch Colors</x-h2>

    <x-mbc::typography>
        Customize switch colors using the <code>color</code> prop. You can use theme colors (primary, secondary) or any custom color value.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Theme Colors:</x-mbc::typography>
                <div style="display: flex; gap: 2rem; align-items: center; flex-wrap: wrap;">
                    <div style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem;">
                        <x-mbc::switch :on="true" color="primary" aria-label="Primary color" />
                        <x-mbc::typography variant="caption">Primary (Default)</x-mbc::typography>
                    </div>

                    <div style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem;">
                        <x-mbc::switch :on="true" color="secondary" aria-label="Secondary color" />
                        <x-mbc::typography variant="caption">Secondary</x-mbc::typography>
                    </div>
                </div>
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Custom Colors:</x-mbc::typography>
                <div style="display: flex; gap: 2rem; align-items: center; flex-wrap: wrap;">
                    <div style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem;">
                        <x-mbc::switch :on="true" color="#4CAF50" aria-label="Green switch" />
                        <x-mbc::typography variant="caption">Success Green</x-mbc::typography>
                    </div>

                    <div style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem;">
                        <x-mbc::switch :on="true" color="#FF9800" aria-label="Orange switch" />
                        <x-mbc::typography variant="caption">Warning Orange</x-mbc::typography>
                    </div>

                    <div style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem;">
                        <x-mbc::switch :on="true" color="#F44336" aria-label="Red switch" />
                        <x-mbc::typography variant="caption">Error Red</x-mbc::typography>
                    </div>

                    <div style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem;">
                        <x-mbc::switch :on="true" color="#9C27B0" aria-label="Purple switch" />
                        <x-mbc::typography variant="caption">Purple</x-mbc::typography>
                    </div>
                </div>
            </div>
        </div>

        @slot('code')
            @include('pages.components.switch._codes.colors')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Use colors purposefully to match your brand or convey meaning (e.g., green for enable, red for critical settings).
    </x-mbc::typography>
</section>
