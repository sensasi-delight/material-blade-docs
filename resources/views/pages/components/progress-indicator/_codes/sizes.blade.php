&lt;div style="display: flex; gap: 3rem; align-items: center; justify-content: center; flex-wrap: wrap;">
    &lt;div style="text-align: center;">
        &lt;x-mbc::circular-progress size="small" :value="0.75" aria-label="Small progress indicator" />
        &lt;x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">Small (24px)&lt;/x-mbc::typography>
    &lt;/div>

    &lt;div style="text-align: center;">
        &lt;x-mbc::circular-progress size="medium" :value="0.75" aria-label="Medium progress indicator" />
        &lt;x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">Medium (36px)&lt;/x-mbc::typography>
    &lt;/div>

    &lt;div style="text-align: center;">
        &lt;x-mbc::circular-progress :value="0.75" aria-label="Default progress indicator" />
        &lt;x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">Default (48px)&lt;/x-mbc::typography>
    &lt;/div>

    &lt;div style="text-align: center;">
        &lt;x-mbc::circular-progress size="64px" :value="0.75" aria-label="Large progress indicator" />
        &lt;x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">Custom (64px)&lt;/x-mbc::typography>
    &lt;/div>
&lt;/div>