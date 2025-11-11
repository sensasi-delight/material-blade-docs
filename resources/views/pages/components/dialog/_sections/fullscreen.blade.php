<section>
    <x-h2>Fullscreen Dialog</x-h2>

    <x-mbc::typography>
        Fullscreen dialogs take up the entire screen and are useful for complex or multi-step tasks. Use the <code>fullscreen</code> attribute to enable this mode.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::button label="Open Fullscreen Dialog" onclick="document.getElementById('demo-fullscreen-dialog').MDCDialog.open()" />
        
        <x-mbc::dialog id="demo-fullscreen-dialog" title="Fullscreen Dialog" fullscreen>
            <x-mbc::typography variant="h6" gutterBottom>
                Full Screen Experience
            </x-mbc::typography>
            <x-mbc::typography gutterBottom>
                This dialog takes up the entire screen, providing maximum space for content and interactions.
            </x-mbc::typography>
            <x-mbc::typography>
                Fullscreen dialogs are ideal for complex forms, detailed settings, or multi-step processes.
            </x-mbc::typography>
            
            @slot('actions')
                <x-mbc::button label="Close" variant="text" data-mdc-dialog-action="close" />
                <x-mbc::button label="Save" variant="text" data-mdc-dialog-action="accept" />
            @endslot
        </x-mbc::dialog>

        @slot('code')
            @include('pages.components.dialog._codes.fullscreen')
        @endslot
    </x-component-preview>
</section>
