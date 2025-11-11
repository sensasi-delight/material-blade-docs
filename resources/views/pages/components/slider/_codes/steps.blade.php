&lt;div style="display: flex; flex-direction: column; gap: 2rem; padding: 1rem;">
    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Step by 1 (Default)&lt;/x-mbc::typography>
        &lt;x-mbc::slider 
            :discrete="true"
            :min="0" 
            :max="10" 
            :value="5"
            :step="1"
            aria-label="Step by 1" 
            name="step1" 
        />
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Step by 5&lt;/x-mbc::typography>
        &lt;x-mbc::slider 
            :discrete="true"
            :min="0" 
            :max="100" 
            :value="50"
            :step="5"
            aria-label="Step by 5" 
            name="step5" 
        />
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Step by 20&lt;/x-mbc::typography>
        &lt;x-mbc::slider 
            :discrete="true"
            :tickMarks="true"
            :min="0" 
            :max="100" 
            :value="60"
            :step="20"
            aria-label="Step by 20" 
            name="step20" 
        />
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Step by 0.5 (Decimal)&lt;/x-mbc::typography>
        &lt;x-mbc::slider 
            :discrete="true"
            :min="0" 
            :max="5" 
            :value="2.5"
            step="0.5"
            aria-label="Step by 0.5" 
            name="stepDecimal" 
        />
    &lt;/div>
&lt;/div>