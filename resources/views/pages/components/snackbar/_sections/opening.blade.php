<section>
    <x-h2>Opening Snackbar</x-h2>

    <x-mbc::typography>
        In production, snackbars are opened programmatically using JavaScript. Each snackbar element automatically has an MDCSnackbar instance attached to it.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::snackbar id="snackbar-opening" message="Success! Operation completed." />
        
        <x-mbc::button label="Open Snackbar" variant="raised" 
            onclick="document.getElementById('snackbar-opening').MDCSnackbar.open()" />

        @slot('code')
            @include('pages.components.snackbar._codes.opening')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Documentation:</strong> For complete API documentation, see the <a href="https://material-components.github.io/material-components-web-catalog/#/component/snackbar" target="_blank">Material Components Web Snackbar documentation</a>.
    </x-mbc::typography>
</section>
