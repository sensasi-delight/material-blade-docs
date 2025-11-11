&lt;div style="display: flex; flex-direction: column; gap: 2rem; padding: 1rem;">
    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Default (0-100)&lt;/x-mbc::typography>
        &lt;x-mbc::slider aria-label="Volume control" name="volume" />
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Custom Range (0-50)&lt;/x-mbc::typography>
        &lt;x-mbc::slider 
            :min="0" 
            :max="50" 
            :value="25" 
            aria-label="Brightness control" 
            name="brightness" 
        />
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Temperature (60-90°F)&lt;/x-mbc::typography>
        &lt;x-mbc::slider 
            :min="60" 
            :max="90" 
            :value="72" 
            aria-label="Temperature control" 
            name="temperature" 
        />
    &lt;/div>
&lt;/div>