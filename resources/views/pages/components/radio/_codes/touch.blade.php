&lt;div style="display: flex; gap: 3rem; flex-wrap: wrap;">
    &lt;div>
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>Standard (No Touch Target)&lt;/x-mbc::typography>
        &lt;div style="display: flex; flex-direction: column; gap: 0.5rem;">
            &lt;x-mbc::radio 
                id="touch-standard-1" 
                name="standard-touch" 
                value="small" 
                label="Small Target Area" 
                checked 
            />
            &lt;x-mbc::radio 
                id="touch-standard-2" 
                name="standard-touch" 
                value="harder" 
                label="Harder to Tap on Mobile" 
            />
        &lt;/div>
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>With Touch Target&lt;/x-mbc::typography>
        &lt;div style="display: flex; flex-direction: column; gap: 0.5rem;">
            &lt;x-mbc::radio 
                id="touch-enabled-1" 
                name="touch-group" 
                value="large" 
                label="Larger Target Area" 
                :touch="true"
                checked 
            />
            &lt;x-mbc::radio 
                id="touch-enabled-2" 
                name="touch-group" 
                value="easier" 
                label="Easier to Tap on Mobile" 
                :touch="true"
            />
        &lt;/div>
    &lt;/div>
&lt;/div>