<section>
    <x-h2>With Action Button</x-h2>

    <x-mbc::typography>
        Snackbars can include an optional action button using the <code>&commat;slot('action')</code> slot. Actions
        allow users to respond to the snackbar message, such as undoing an operation or viewing details.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::snackbar id="snackbar-action-1" message="Item deleted">
            @slot('action')
                <x-mbc::button label="Undo" />
            @endslot
        </x-mbc::snackbar>
        
        <x-mbc::snackbar id="snackbar-action-2" message="Photo archived">
            @slot('action')
                <x-mbc::button label="View" />
            @endslot
        </x-mbc::snackbar>
        
        <x-mbc::snackbar id="snackbar-action-3" message="Connection timeout">
            @slot('action')
                <x-mbc::button label="Retry" />
            @endslot
        </x-mbc::snackbar>
        
        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
            <x-mbc::button label="Delete Item" variant="outlined" 
                onclick="document.getElementById('snackbar-action-1').MDCSnackbar.open()" />
            <x-mbc::button label="Archive Photo" variant="outlined" 
                onclick="document.getElementById('snackbar-action-2').MDCSnackbar.open()" />
            <x-mbc::button label="Connection Error" variant="outlined" 
                onclick="document.getElementById('snackbar-action-3').MDCSnackbar.open()" />
        </div>

        @slot('code')
        @include('pages.components.snackbar._codes.action')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Best Practice:</strong> Action buttons should use a single word when possible (Undo, Retry, View). Keep
        actions simple and directly related to the snackbar message.
    </x-mbc::typography>
</section>