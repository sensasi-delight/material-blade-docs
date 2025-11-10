<section>
    <x-h2>Radio Colors</x-h2>

    <x-mbc::typography>
        Customize radio button colors using the <code>color</code> prop. You can use theme colors or any custom color value.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 1.5rem;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Theme Colors</x-mbc::typography>
                <div style="display: flex; gap: 2rem; flex-wrap: wrap;">
                    <x-mbc::radio 
                        id="color-primary" 
                        name="theme-colors" 
                        value="primary" 
                        label="Primary" 
                        color="primary"
                        checked 
                    />
                    <x-mbc::radio 
                        id="color-secondary" 
                        name="theme-colors" 
                        value="secondary" 
                        label="Secondary (Default)" 
                        color="secondary"
                    />
                </div>
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Custom Colors</x-mbc::typography>
                <div style="display: flex; gap: 2rem; flex-wrap: wrap;">
                    <x-mbc::radio 
                        id="color-success" 
                        name="custom-colors" 
                        value="success" 
                        label="Success Green" 
                        color="#4CAF50"
                        checked 
                    />
                    <x-mbc::radio 
                        id="color-warning" 
                        name="custom-colors" 
                        value="warning" 
                        label="Warning Orange" 
                        color="#FF9800"
                    />
                    <x-mbc::radio 
                        id="color-error" 
                        name="custom-colors" 
                        value="error" 
                        label="Error Red" 
                        color="#F44336"
                    />
                    <x-mbc::radio 
                        id="color-info" 
                        name="custom-colors" 
                        value="info" 
                        label="Info Blue" 
                        color="#2196F3"
                    />
                </div>
            </div>
        </div>

        @slot('code')
            @include('pages.components.radio._codes.colors')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Use colors purposefully to convey meaning or match your brand. The default color is secondary, which follows Material Design guidelines.
    </x-mbc::typography>
</section>
