&lt;div style="display: flex; flex-direction: column; gap: 1.5rem;">
    &lt;div>
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>Mixed States&lt;/x-mbc::typography>
        &lt;div style="display: flex; flex-direction: column; gap: 0.5rem;">
            &lt;x-mbc::radio 
                id="disabled-1" 
                name="disabled-group" 
                value="enabled-selected" 
                label="Enabled &amp; Selected" 
                checked 
            />
            &lt;x-mbc::radio 
                id="disabled-2" 
                name="disabled-group" 
                value="enabled-unselected" 
                label="Enabled &amp; Unselected" 
            />
            &lt;x-mbc::radio 
                id="disabled-3" 
                name="disabled-group" 
                value="disabled-unselected" 
                label="Disabled &amp; Unselected" 
                disabled 
            />
            &lt;x-mbc::radio 
                id="disabled-4" 
                name="disabled-separate" 
                value="disabled-selected" 
                label="Disabled &amp; Selected" 
                disabled 
                checked 
            />
        &lt;/div>
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>Unavailable Options&lt;/x-mbc::typography>
        &lt;div style="display: flex; flex-direction: column; gap: 0.5rem;">
            &lt;x-mbc::radio 
                id="product-basic" 
                name="product" 
                value="basic" 
                label="Basic Plan - Available" 
                checked 
            />
            &lt;x-mbc::radio 
                id="product-pro" 
                name="product" 
                value="pro" 
                label="Pro Plan - Available" 
            />
            &lt;x-mbc::radio 
                id="product-premium" 
                name="product" 
                value="premium" 
                label="Premium Plan - Sold Out" 
                disabled 
            />
            &lt;x-mbc::radio 
                id="product-enterprise" 
                name="product" 
                value="enterprise" 
                label="Enterprise Plan - Coming Soon" 
                disabled 
            />
        &lt;/div>
    &lt;/div>
&lt;/div>