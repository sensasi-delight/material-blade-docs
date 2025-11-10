&lt;x-mbc::button 
    label="Open Dialog" 
    onclick="document.getElementById('my-dialog').MDCDialog.open()" 
/>

&lt;x-mbc::dialog id="my-dialog">
    Dialog content here
    
    @slot('actions')
        &lt;x-mbc::button label="Close" variant="text" data-mdc-dialog-action="close" />
    @endslot
&lt;/x-mbc::dialog>
