&lt;div style="display: flex; flex-direction: column; gap: 2rem; padding: 1rem;">
    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Priority Level (1-5)&lt;/x-mbc::typography>
        &lt;x-mbc::slider 
            :discrete="true"
            :tickMarks="true"
            :min="1" 
            :max="5" 
            :value="3"
            :step="1"
            aria-label="Priority level" 
            name="priority" 
        />
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Every 10 (0-100)&lt;/x-mbc::typography>
        &lt;x-mbc::slider 
            :discrete="true"
            :tickMarks="true"
            :min="0" 
            :max="100" 
            :value="50"
            :step="10"
            aria-label="Value by tens" 
            name="tens" 
        />
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="body2" gutterBottom>Every 25 (0-100)&lt;/x-mbc::typography>
        &lt;x-mbc::slider 
            :discrete="true"
            :tickMarks="true"
            :min="0" 
            :max="100" 
            :value="50"
            :step="25"
            aria-label="Quarters" 
            name="quarters" 
        />
    &lt;/div>
&lt;/div>