&lt;x-mbc::button 
    label="Open Confirmation Dialog" 
    onclick="document.getElementById('demo-actions-dialog').MDCDialog.open()" 
/>

&lt;x-mbc::dialog id="demo-actions-dialog" title="Delete Confirmation">
    &lt;x-mbc::typography>
        Are you sure you want to delete this item? 
        This action cannot be undone.
    &lt;/x-mbc::typography>
    
    @slot('actions')
        &lt;x-mbc::button 
            label="Cancel" 
            variant="text" 
            data-mdc-dialog-action="close" 
        />
        &lt;x-mbc::button 
            label="Delete" 
            variant="text" 
            color="error" 
            data-mdc-dialog-action="delete" 
        />
    @endslot
&lt;/x-mbc::dialog>
