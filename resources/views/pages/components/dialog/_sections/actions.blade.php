<section>
    <x-h2>Dialog Actions</x-h2>

    <x-mbc::typography>
        Dialogs typically contain action buttons in the footer. Use the <code>actions</code> slot to add buttons with appropriate actions.
    </x-mbc::typography>

    <x-mbc::typography>
        Use <code>data-mdc-dialog-action</code> attributes to handle different user responses:
        <ul>
            <li><code>data-mdc-dialog-action="close"</code> - Closes the dialog without action</li>
            <li><code>data-mdc-dialog-action="accept"</code> - Accepts/confirms the dialog action</li>
            <li>Custom values for specific actions in your JavaScript handlers</li>
        </ul>
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::button label="Open Confirmation Dialog" onclick="document.getElementById('demo-actions-dialog').MDCDialog.open()" />
        
        <x-mbc::dialog id="demo-actions-dialog" title="Delete Confirmation">
            <x-mbc::typography>
                Are you sure you want to delete this item? This action cannot be undone.
            </x-mbc::typography>
            
            @slot('actions')
                <x-mbc::button label="Cancel" variant="text" data-mdc-dialog-action="close" />
                <x-mbc::button label="Delete" variant="text" color="error" data-mdc-dialog-action="delete" />
            @endslot
        </x-mbc::dialog>

        @slot('code')
            @include('pages.components.dialog._codes.actions')
        @endslot
    </x-component-preview>
</section>
