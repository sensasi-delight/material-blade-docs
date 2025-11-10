&lt;div style="display: flex; flex-direction: column; gap: 1.5rem; width: 100%;">
    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>25% Complete&lt;/x-mbc::typography>
        &lt;x-mbc::linear-progress :value="0.25" aria-label="25 percent complete" />
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>50% Complete&lt;/x-mbc::typography>
        &lt;x-mbc::linear-progress :value="0.5" aria-label="50 percent complete" />
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>75% Complete&lt;/x-mbc::typography>
        &lt;x-mbc::linear-progress :value="0.75" aria-label="75 percent complete" />
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>100% Complete&lt;/x-mbc::typography>
        &lt;x-mbc::linear-progress :value="1.0" aria-label="100 percent complete" />
    &lt;/div>
&lt;/div>