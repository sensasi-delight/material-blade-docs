&lt;div style="display: flex; gap: 3rem; flex-wrap: wrap;">
    &lt;div>
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>Delivery Method&lt;/x-mbc::typography>
        &lt;div style="display: flex; flex-direction: column; gap: 0.5rem;">
            &lt;x-mbc::radio 
                id="delivery-standard" 
                name="delivery" 
                value="standard" 
                label="Standard (5-7 days)" 
                checked 
            />
            &lt;x-mbc::radio 
                id="delivery-express" 
                name="delivery" 
                value="express" 
                label="Express (2-3 days)" 
            />
            &lt;x-mbc::radio 
                id="delivery-overnight" 
                name="delivery" 
                value="overnight" 
                label="Overnight" 
            />
        &lt;/div>
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>Payment Method&lt;/x-mbc::typography>
        &lt;div style="display: flex; flex-direction: column; gap: 0.5rem;">
            &lt;x-mbc::radio 
                id="payment-credit" 
                name="payment" 
                value="credit" 
                label="Credit Card" 
                checked 
            />
            &lt;x-mbc::radio 
                id="payment-paypal" 
                name="payment" 
                value="paypal" 
                label="PayPal" 
            />
            &lt;x-mbc::radio 
                id="payment-bank" 
                name="payment" 
                value="bank" 
                label="Bank Transfer" 
            />
        &lt;/div>
    &lt;/div>
&lt;/div>