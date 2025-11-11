<section>
    <x-h2>Disabled State</x-h2>

    <x-mbc::typography>
        Disable radio buttons using the <code>disabled</code> attribute. Disabled radios cannot be interacted with and have reduced opacity.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 1.5rem;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Mixed States</x-mbc::typography>
                <div style="display: flex; flex-direction: column; gap: 0.5rem;">
                    <x-mbc::radio 
                        id="disabled-1" 
                        name="disabled-group" 
                        value="enabled-selected" 
                        label="Enabled & Selected" 
                        checked 
                    />
                    <x-mbc::radio 
                        id="disabled-2" 
                        name="disabled-group" 
                        value="enabled-unselected" 
                        label="Enabled & Unselected" 
                    />
                    <x-mbc::radio 
                        id="disabled-3" 
                        name="disabled-group" 
                        value="disabled-unselected" 
                        label="Disabled & Unselected" 
                        disabled 
                    />
                    <x-mbc::radio 
                        id="disabled-4" 
                        name="disabled-separate" 
                        value="disabled-selected" 
                        label="Disabled & Selected" 
                        disabled 
                        checked 
                    />
                </div>
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Unavailable Options</x-mbc::typography>
                <div style="display: flex; flex-direction: column; gap: 0.5rem;">
                    <x-mbc::radio 
                        id="product-basic" 
                        name="product" 
                        value="basic" 
                        label="Basic Plan - Available" 
                        checked 
                    />
                    <x-mbc::radio 
                        id="product-pro" 
                        name="product" 
                        value="pro" 
                        label="Pro Plan - Available" 
                    />
                    <x-mbc::radio 
                        id="product-premium" 
                        name="product" 
                        value="premium" 
                        label="Premium Plan - Sold Out" 
                        disabled 
                    />
                    <x-mbc::radio 
                        id="product-enterprise" 
                        name="product" 
                        value="enterprise" 
                        label="Enterprise Plan - Coming Soon" 
                        disabled 
                    />
                </div>
            </div>
        </div>

        @slot('code')
            @include('pages.components.radio._codes.disabled')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Use Case:</strong> Disable options that are unavailable, out of stock, or not applicable based on previous selections.
    </x-mbc::typography>
</section>
