&lt;div style="display: flex; flex-direction: column; gap: 2rem; width: 100%;">
    &lt;div>
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>Loading Application&lt;/x-mbc::typography>
        &lt;x-mbc::linear-progress aria-label="Loading application" />
        &lt;x-mbc::typography variant="caption" style="color: #666; margin-top: 4px;">Please wait...&lt;/x-mbc::typography>
    &lt;/div>

    &lt;div style="display: flex; gap: 3rem; align-items: center; justify-content: center;">
        &lt;div style="text-align: center;">
            &lt;x-mbc::circular-progress aria-label="Loading data" />
            &lt;x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">Loading...&lt;/x-mbc::typography>
        &lt;/div>

        &lt;div style="text-align: center;">
            &lt;x-mbc::circular-progress aria-label="Processing request" />
            &lt;x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">Processing...&lt;/x-mbc::typography>
        &lt;/div>

        &lt;div style="text-align: center;">
            &lt;x-mbc::circular-progress aria-label="Syncing data" />
            &lt;x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">Syncing...&lt;/x-mbc::typography>
        &lt;/div>
    &lt;/div>
&lt;/div>