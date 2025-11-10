&lt;div style="display: flex; flex-direction: column; gap: 2rem; padding: 1rem;">
    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Price Range ($0-$100)&lt;/x-mbc::typography>
        &lt;x-mbc::slider 
            :range="true"
            :min="0" 
            :max="100" 
            :valueStart="20"
            :valueEnd="80"
            aria-label="Price range" 
            nameStart="priceMin"
            nameEnd="priceMax"
        />
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Discrete Range (0-10)&lt;/x-mbc::typography>
        &lt;x-mbc::slider 
            :range="true"
            :discrete="true"
            :min="0" 
            :max="10" 
            :valueStart="3"
            :valueEnd="7"
            aria-label="Value range" 
            nameStart="valueMin"
            nameEnd="valueMax"
        />
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>With Minimum Distance (minRange=10)&lt;/x-mbc::typography>
        &lt;x-mbc::slider 
            :range="true"
            :discrete="true"
            :min="0" 
            :max="100" 
            :valueStart="30"
            :valueEnd="70"
            :minRange="10"
            aria-label="Range with minimum distance" 
            nameStart="rangeMin"
            nameEnd="rangeMax"
        />
    &lt;/div>
&lt;/div>