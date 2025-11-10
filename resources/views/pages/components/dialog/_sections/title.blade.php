<section>
    <x-h2>With Title</x-h2>

    <x-mbc::typography>
        You can add a title to the dialog using the <code>title</code> attribute. The title will be displayed at the top of the dialog.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::button label="Open Dialog with Title" onclick="document.getElementById('demo-title-dialog').MDCDialog.open()" />
        
        <x-mbc::dialog id="demo-title-dialog" title="Dialog Title">
            <x-mbc::typography>
                This dialog has a title at the top. Titles help users understand the purpose of the dialog at a glance.
            </x-mbc::typography>
            
            @slot('actions')
                <x-mbc::button label="Cancel" variant="text" data-mdc-dialog-action="close" />
                <x-mbc::button label="Agree" variant="text" data-mdc-dialog-action="accept" />
            @endslot
        </x-mbc::dialog>

        @slot('code')
            @include('pages.components.dialog._codes.title')
        @endslot
    </x-component-preview>
</section>
