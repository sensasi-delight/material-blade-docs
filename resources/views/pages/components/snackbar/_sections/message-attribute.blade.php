@php
    $successMessage = "File uploaded successfully";
@endphp

<section>
    <x-h2>Dynamic Messages</x-h2>

    <x-mbc::typography>
        The <code>message</code> attribute accepts dynamic content from variables, making it easy to pass messages from
        controllers, session data, or computed values.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::snackbar id="snackbar-msg-1" message="{{ $successMessage }}" />
        <x-mbc::snackbar id="snackbar-msg-2" message="Changes saved" />
        <x-mbc::snackbar id="snackbar-msg-3" message="Email deleted" />
        
        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
            <x-mbc::button label="File Uploaded" variant="outlined" 
                onclick="document.getElementById('snackbar-msg-1').MDCSnackbar.open()" />
            <x-mbc::button label="Changes Saved" variant="outlined" 
                onclick="document.getElementById('snackbar-msg-2').MDCSnackbar.open()" />
            <x-mbc::button label="Email Deleted" variant="outlined" 
                onclick="document.getElementById('snackbar-msg-3').MDCSnackbar.open()" />
        </div>

        @slot('code')
        @include('pages.components.snackbar._codes.message-attribute')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Use the <code>message</code> attribute when passing dynamic content from variables:
        <code>message="{{ $successMessage }}"</code>
    </x-mbc::typography>
</section>