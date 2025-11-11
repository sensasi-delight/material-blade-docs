&lt;x-mbc::button 
    label="Open Scrollable Dialog" 
    onclick="document.getElementById('demo-scrollable-dialog').MDCDialog.open()" 
/>

&lt;x-mbc::dialog id="demo-scrollable-dialog" title="Terms and Conditions" scrollable>
    &lt;x-mbc::typography gutterBottom>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    &lt;/x-mbc::typography>
    
    &lt;x-mbc::typography gutterBottom>
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
        nisi ut aliquip ex ea commodo consequat.
    &lt;/x-mbc::typography>
    
    &lt;x-mbc::typography>
        More content here... The content area will be scrollable.
    &lt;/x-mbc::typography>
    
    @slot('actions')
        &lt;x-mbc::button label="Decline" variant="text" data-mdc-dialog-action="close" />
        &lt;x-mbc::button label="Accept" variant="text" data-mdc-dialog-action="accept" />
    @endslot
&lt;/x-mbc::dialog>
