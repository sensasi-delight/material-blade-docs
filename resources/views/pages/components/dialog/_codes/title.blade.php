&lt;x-mbc::button 
    label="Open Dialog with Title" 
    onclick="document.getElementById('demo-title-dialog').MDCDialog.open()" 
/>

&lt;x-mbc::dialog id="demo-title-dialog" title="Dialog Title">
    &lt;x-mbc::typography>
        This dialog has a title at the top. Titles help users understand 
        the purpose of the dialog at a glance.
    &lt;/x-mbc::typography>
    
    @slot('actions')
        &lt;x-mbc::button label="Cancel" variant="text" data-mdc-dialog-action="close" />
        &lt;x-mbc::button label="Agree" variant="text" data-mdc-dialog-action="accept" />
    @endslot
&lt;/x-mbc::dialog>
