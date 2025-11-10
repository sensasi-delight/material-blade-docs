&lt;div style="display: flex; flex-direction: column; gap: 2rem; width: 100%;">
    &lt;div>
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>File Upload Progress&lt;/x-mbc::typography>
        &lt;x-mbc::linear-progress :value="0.65" aria-label="Upload 65 percent complete" />
        &lt;x-mbc::typography variant="caption" style="color: #666; margin-top: 4px;">65% uploaded (13 MB of 20 MB)&lt;/x-mbc::typography>
    &lt;/div>

    &lt;div style="display: flex; gap: 2rem; align-items: center;">
        &lt;div style="flex: 1;">
            &lt;x-mbc::typography variant="subtitle2" gutterBottom>Processing Task&lt;/x-mbc::typography>
            &lt;x-mbc::linear-progress :value="0.33" aria-label="Task 33 percent complete" />
            &lt;x-mbc::typography variant="caption" style="color: #666; margin-top: 4px;">Step 1 of 3&lt;/x-mbc::typography>
        &lt;/div>

        &lt;div style="text-align: center;">
            &lt;x-mbc::circular-progress :value="0.33" aria-label="Processing 33 percent" />
            &lt;x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">33%&lt;/x-mbc::typography>
        &lt;/div>
    &lt;/div>
&lt;/div>