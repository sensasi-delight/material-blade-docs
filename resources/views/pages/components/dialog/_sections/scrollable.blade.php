<section>
    <x-h2>Scrollable Content</x-h2>

    <x-mbc::typography>
        For dialogs with long content, you can make the content area scrollable by adding the <code>scrollable</code> attribute.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::button label="Open Scrollable Dialog" onclick="document.getElementById('demo-scrollable-dialog').MDCDialog.open()" />
        
        <x-mbc::dialog id="demo-scrollable-dialog" title="Terms and Conditions" scrollable>
            <x-mbc::typography gutterBottom>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </x-mbc::typography>
            <x-mbc::typography gutterBottom>
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </x-mbc::typography>
            <x-mbc::typography gutterBottom>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </x-mbc::typography>
            <x-mbc::typography gutterBottom>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </x-mbc::typography>
            <x-mbc::typography>
                Scroll down to see more content...
            </x-mbc::typography>
            
            @slot('actions')
                <x-mbc::button label="Decline" variant="text" data-mdc-dialog-action="close" />
                <x-mbc::button label="Accept" variant="text" data-mdc-dialog-action="accept" />
            @endslot
        </x-mbc::dialog>

        @slot('code')
            @include('pages.components.dialog._codes.scrollable')
        @endslot
    </x-component-preview>
</section>
