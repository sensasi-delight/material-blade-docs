&lt;div style="display: flex; flex-direction: column; gap: 2rem; padding: 1rem;">
    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Quantity (0-10)&lt;/x-mbc::typography>
        &lt;x-mbc::slider 
            :discrete="true"
            :min="0" 
            :max="10" 
            :value="5" 
            aria-label="Quantity selector" 
            name="quantity" 
        />
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Rating (0-5)&lt;/x-mbc::typography>
        &lt;x-mbc::slider 
            :discrete="true"
            :min="0" 
            :max="5" 
            :value="3" 
            aria-label="Rating selector" 
            name="rating" 
        />
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Percentage (0-100)&lt;/x-mbc::typography>
        &lt;x-mbc::slider 
            :discrete="true"
            :min="0" 
            :max="100" 
            :value="75" 
            aria-label="Percentage selector" 
            name="percentage" 
        />
    &lt;/div>
&lt;/div>