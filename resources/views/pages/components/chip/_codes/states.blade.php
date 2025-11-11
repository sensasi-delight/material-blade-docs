&lt;div style="display: flex; flex-direction: column; gap: 1.5rem;">
    &lt;div>
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>Selected State:&lt;/x-mbc::typography>
        &lt;x-mbc::chip-set variant="filter">
            &lt;x-mbc::chip label="Not Selected" />
            &lt;x-mbc::chip label="Selected" :selected="true" />
        &lt;/x-mbc::chip-set>
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>Disabled State:&lt;/x-mbc::typography>
        &lt;x-mbc::chip-set>
            &lt;x-mbc::chip label="Enabled Chip" />
            &lt;x-mbc::chip label="Disabled Chip" :disabled="true" />
        &lt;/x-mbc::chip-set>
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>With Touch Wrapper (Better Touch Accessibility):&lt;/x-mbc::typography>
        &lt;x-mbc::chip-set>
            &lt;x-mbc::chip label="Normal Chip" />
            &lt;x-mbc::chip label="Touch Chip" :withWrapper="true" />
        &lt;/x-mbc::chip-set>
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>Combined States:&lt;/x-mbc::typography>
        &lt;x-mbc::chip-set variant="filter">
            &lt;x-mbc::chip label="Selected with Icon" icon="check_circle" :selected="true" />
            &lt;x-mbc::chip label="Disabled with Icon" icon="block" :disabled="true" />
            &lt;x-mbc::chip label="Normal with Icon" icon="info" />
        &lt;/x-mbc::chip-set>
    &lt;/div>
&lt;/div>