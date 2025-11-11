&lt;x-mbc::button 
    label="Open Fullscreen Dialog" 
    onclick="document.getElementById('demo-fullscreen-dialog').MDCDialog.open()" 
/>

&lt;x-mbc::dialog id="demo-fullscreen-dialog" title="Fullscreen Dialog" fullscreen>
    &lt;x-mbc::typography variant="h6" gutterBottom>
        Full Screen Experience
    &lt;/x-mbc::typography>
    
    &lt;x-mbc::typography gutterBottom>
        This dialog takes up the entire screen, providing maximum space 
        for content and interactions.
    &lt;/x-mbc::typography>
    
    &lt;x-mbc::typography>
        Fullscreen dialogs are ideal for complex forms, detailed settings, 
        or multi-step processes.
    &lt;/x-mbc::typography>
    
    @slot('actions')
        &lt;x-mbc::button label="Close" variant="text" data-mdc-dialog-action="close" />
        &lt;x-mbc::button label="Save" variant="text" data-mdc-dialog-action="accept" />
    @endslot
&lt;/x-mbc::dialog>
