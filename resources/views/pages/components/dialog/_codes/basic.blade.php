{{-- Button to trigger dialog --}}
&lt;x-mbc::button 
    label="Open Basic Dialog" 
    onclick="document.getElementById('demo-basic-dialog').MDCDialog.open()" 
/>

{{-- Dialog component --}}
&lt;x-mbc::dialog id="demo-basic-dialog">
    &lt;x-mbc::typography>
        This is a basic dialog. Click outside or press ESC to close.
    &lt;/x-mbc::typography>
    
    @slot('actions')
        &lt;x-mbc::button label="Close" variant="text" data-mdc-dialog-action="close" />
    @endslot
&lt;/x-mbc::dialog>
