<section>
    <x-h2>Basic</x-h2>

    <x-mbc::typography>
        A basic dialog can be created using the <code>mbc::dialog</code> component. You need to provide a button or trigger to open the dialog using JavaScript.
    </x-mbc::typography>

    <x-mbc::typography>
        Use <code>data-mdc-dialog-action="close"</code> on buttons to close the dialog.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::button label="Open Basic Dialog" onclick="document.getElementById('demo-basic-dialog').MDCDialog.open()" />
        
        <x-mbc::dialog id="demo-basic-dialog">
            <x-mbc::typography>
                This is a basic dialog. Click outside or press ESC to close.
            </x-mbc::typography>
            
            @slot('actions')
                <x-mbc::button label="Close" variant="text" data-mdc-dialog-action="close" />
            @endslot
        </x-mbc::dialog>

        @slot('code')
            @include('pages.components.dialog._codes.basic')
        @endslot
    </x-component-preview>
</section>
