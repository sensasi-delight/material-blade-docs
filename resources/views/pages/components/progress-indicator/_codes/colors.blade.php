&lt;div style="display: flex; flex-direction: column; gap: 2rem; width: 100%;">
    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Primary (Default)&lt;/x-mbc::typography>
        &lt;x-mbc::linear-progress color="primary" :value="0.6" aria-label="Primary colored progress" />
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Secondary&lt;/x-mbc::typography>
        &lt;x-mbc::linear-progress color="secondary" :value="0.6" aria-label="Secondary colored progress" />
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Success (Custom Green)&lt;/x-mbc::typography>
        &lt;x-mbc::linear-progress color="#4CAF50" :value="0.6" aria-label="Success progress" />
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Warning (Custom Orange)&lt;/x-mbc::typography>
        &lt;x-mbc::linear-progress color="#FF9800" :value="0.6" aria-label="Warning progress" />
    &lt;/div>

    &lt;div style="display: flex; gap: 2rem; justify-content: center; margin-top: 1rem;">
        &lt;div style="text-align: center;">
            &lt;x-mbc::circular-progress color="primary" :value="0.6" aria-label="Primary circular" />
            &lt;x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">Primary&lt;/x-mbc::typography>
        &lt;/div>

        &lt;div style="text-align: center;">
            &lt;x-mbc::circular-progress color="#4CAF50" :value="0.6" aria-label="Success circular" />
            &lt;x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">Success&lt;/x-mbc::typography>
        &lt;/div>

        &lt;div style="text-align: center;">
            &lt;x-mbc::circular-progress color="#F44336" :value="0.6" aria-label="Error circular" />
            &lt;x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">Error&lt;/x-mbc::typography>
        &lt;/div>
    &lt;/div>
&lt;/div>