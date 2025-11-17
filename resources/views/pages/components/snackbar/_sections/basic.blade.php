<section>
    <x-h2>Basic Snackbar</x-h2>

    <x-mbc::typography>
        Use the <code>message</code> attribute to display brief messages at the bottom of the screen. Snackbars
        communicate simple notifications about app processes.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::snackbar id="snackbar-basic-1" message="Message sent successfully" />
        <x-mbc::snackbar id="snackbar-basic-2" message="Connection lost. Retrying..." />
        <x-mbc::snackbar id="snackbar-basic-3" message="Photo saved to your gallery" />
        
        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
            <x-mbc::button label="Show Message 1" variant="outlined" 
                onclick="document.getElementById('snackbar-basic-1').MDCSnackbar.open()" />
            <x-mbc::button label="Show Message 2" variant="outlined" 
                onclick="document.getElementById('snackbar-basic-2').MDCSnackbar.open()" />
            <x-mbc::button label="Show Message 3" variant="outlined" 
                onclick="document.getElementById('snackbar-basic-3').MDCSnackbar.open()" />
        </div>

        @slot('code')
        @include('pages.components.snackbar._codes.basic')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Best Practice:</strong> Keep snackbar messages brief and informative. They should communicate simple,
        single-line messages about operations or states.
    </x-mbc::typography>
</section>