<section>
    <x-h2>Radio Groups</x-h2>

    <x-mbc::typography>
        Create different radio groups by using different <code>name</code> attributes. Each group operates independently, allowing one selection per group.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 3rem; flex-wrap: wrap;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Delivery Method</x-mbc::typography>
                <div style="display: flex; flex-direction: column; gap: 0.5rem;">
                    <x-mbc::radio 
                        id="delivery-standard" 
                        name="delivery" 
                        value="standard" 
                        label="Standard (5-7 days)" 
                        checked 
                    />
                    <x-mbc::radio 
                        id="delivery-express" 
                        name="delivery" 
                        value="express" 
                        label="Express (2-3 days)" 
                    />
                    <x-mbc::radio 
                        id="delivery-overnight" 
                        name="delivery" 
                        value="overnight" 
                        label="Overnight" 
                    />
                </div>
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Payment Method</x-mbc::typography>
                <div style="display: flex; flex-direction: column; gap: 0.5rem;">
                    <x-mbc::radio 
                        id="payment-credit" 
                        name="payment" 
                        value="credit" 
                        label="Credit Card" 
                        checked 
                    />
                    <x-mbc::radio 
                        id="payment-paypal" 
                        name="payment" 
                        value="paypal" 
                        label="PayPal" 
                    />
                    <x-mbc::radio 
                        id="payment-bank" 
                        name="payment" 
                        value="bank" 
                        label="Bank Transfer" 
                    />
                </div>
            </div>
        </div>

        @slot('code')
            @include('pages.components.radio._codes.groups')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Note:</strong> Each group has its own independent selection. Radios with <code>name="delivery"</code> are separate from those with <code>name="payment"</code>.
    </x-mbc::typography>
</section>
