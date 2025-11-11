&lt;div style="display: flex; gap: 2rem; align-items: center; justify-content: center; flex-wrap: wrap;">
    &lt;div style="text-align: center;">
        &lt;x-mbc::circular-progress :value="0.25" aria-label="25 percent progress" />
        &lt;x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">25%&lt;/x-mbc::typography>
    &lt;/div>

    &lt;div style="text-align: center;">
        &lt;x-mbc::circular-progress :value="0.5" aria-label="50 percent progress" />
        &lt;x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">50%&lt;/x-mbc::typography>
    &lt;/div>

    &lt;div style="text-align: center;">
        &lt;x-mbc::circular-progress :value="0.75" aria-label="75 percent progress" />
        &lt;x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">75%&lt;/x-mbc::typography>
    &lt;/div>

    &lt;div style="text-align: center;">
        &lt;x-mbc::circular-progress :value="1.0" aria-label="100 percent progress" />
        &lt;x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">100%&lt;/x-mbc::typography>
    &lt;/div>
&lt;/div>