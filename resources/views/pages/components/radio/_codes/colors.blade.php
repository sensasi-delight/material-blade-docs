&lt;div style="display: flex; flex-direction: column; gap: 1.5rem;">
    &lt;div>
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>Theme Colors&lt;/x-mbc::typography>
        &lt;div style="display: flex; gap: 2rem; flex-wrap: wrap;">
            &lt;x-mbc::radio 
                id="color-primary" 
                name="theme-colors" 
                value="primary" 
                label="Primary" 
                color="primary"
                checked 
            />
            &lt;x-mbc::radio 
                id="color-secondary" 
                name="theme-colors" 
                value="secondary" 
                label="Secondary (Default)" 
                color="secondary"
            />
        &lt;/div>
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>Custom Colors&lt;/x-mbc::typography>
        &lt;div style="display: flex; gap: 2rem; flex-wrap: wrap;">
            &lt;x-mbc::radio 
                id="color-success" 
                name="custom-colors" 
                value="success" 
                label="Success Green" 
                color="#4CAF50"
                checked 
            />
            &lt;x-mbc::radio 
                id="color-warning" 
                name="custom-colors" 
                value="warning" 
                label="Warning Orange" 
                color="#FF9800"
            />
            &lt;x-mbc::radio 
                id="color-error" 
                name="custom-colors" 
                value="error" 
                label="Error Red" 
                color="#F44336"
            />
            &lt;x-mbc::radio 
                id="color-info" 
                name="custom-colors" 
                value="info" 
                label="Info Blue" 
                color="#2196F3"
            />
        &lt;/div>
    &lt;/div>
&lt;/div>