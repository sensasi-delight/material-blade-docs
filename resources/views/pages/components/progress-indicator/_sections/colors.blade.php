<section>
    <x-h2>Progress Colors</x-h2>

    <x-mbc::typography>
        Customize progress indicator colors using the <code>color</code> prop. You can use theme colors (primary, secondary) or any custom color value.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem; width: 100%;">
            <div>
                <x-mbc::typography variant="body2" gutterBottom>Primary (Default)</x-mbc::typography>
                <x-mbc::linear-progress color="primary" :value="0.6" aria-label="Primary colored progress" />
            </div>

            <div>
                <x-mbc::typography variant="body2" gutterBottom>Secondary</x-mbc::typography>
                <x-mbc::linear-progress color="secondary" :value="0.6" aria-label="Secondary colored progress" />
            </div>

            <div>
                <x-mbc::typography variant="body2" gutterBottom>Success (Custom Green)</x-mbc::typography>
                <x-mbc::linear-progress color="#4CAF50" :value="0.6" aria-label="Success progress" />
            </div>

            <div>
                <x-mbc::typography variant="body2" gutterBottom>Warning (Custom Orange)</x-mbc::typography>
                <x-mbc::linear-progress color="#FF9800" :value="0.6" aria-label="Warning progress" />
            </div>

            <div style="display: flex; gap: 2rem; justify-content: center; margin-top: 1rem;">
                <div style="text-align: center;">
                    <x-mbc::circular-progress color="primary" :value="0.6" aria-label="Primary circular" />
                    <x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">Primary</x-mbc::typography>
                </div>

                <div style="text-align: center;">
                    <x-mbc::circular-progress color="#4CAF50" :value="0.6" aria-label="Success circular" />
                    <x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">Success</x-mbc::typography>
                </div>

                <div style="text-align: center;">
                    <x-mbc::circular-progress color="#F44336" :value="0.6" aria-label="Error circular" />
                    <x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">Error</x-mbc::typography>
                </div>
            </div>
        </div>

        @slot('code')
            @include('pages.components.progress-indicator._codes.colors')
        @endslot>
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Best Practice:</strong> Use colors purposefully to convey meaning. Green for success/completion, orange for warnings, red for errors, and theme colors for general loading states.
    </x-mbc::typography>
</section>
