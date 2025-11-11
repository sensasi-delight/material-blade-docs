&lt;div style="display: flex; flex-direction: column; gap: 2rem; align-items: center;">
    &lt;div style="width: 100%;">
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>Linear Progress&lt;/x-mbc::typography>
        &lt;x-mbc::linear-progress :value="0.7" aria-label="Loading progress" />
    &lt;/div>
    
    &lt;div>
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>Circular Progress&lt;/x-mbc::typography>
        &lt;x-mbc::circular-progress :value="0.7" aria-label="Loading progress" />
    &lt;/div>
&lt;/div>