&lt;div style="display: flex; flex-direction: column; gap: 2rem; padding: 1rem;">
    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Disabled Continuous Slider&lt;/x-mbc::typography>
        &lt;x-mbc::slider 
            :value="50"
            aria-label="Disabled continuous slider" 
            disabled 
        />
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Disabled Discrete Slider&lt;/x-mbc::typography>
        &lt;x-mbc::slider 
            :discrete="true"
            :min="0" 
            :max="10" 
            :value="7"
            aria-label="Disabled discrete slider" 
            disabled 
        />
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Disabled with Tick Marks&lt;/x-mbc::typography>
        &lt;x-mbc::slider 
            :discrete="true"
            :tickMarks="true"
            :min="0" 
            :max="100" 
            :value="75"
            :step="25"
            aria-label="Disabled with tick marks" 
            disabled 
        />
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Disabled Range Slider&lt;/x-mbc::typography>
        &lt;x-mbc::slider 
            :range="true"
            :discrete="true"
            :min="0" 
            :max="100" 
            :valueStart="25"
            :valueEnd="75"
            aria-label="Disabled range slider" 
            disabled 
        />
    &lt;/div>
&lt;/div>