<section>
    <x-h2>Snackbar Variants</x-h2>

    <x-mbc::typography>
        Snackbars support different layout variants: <code>default</code>, <code>leading</code>, and <code>stacked</code>. These variants control how the message and action button are positioned.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::snackbar id="snackbar-default" variant="default" message="Default layout">
            @slot('action')
                <x-mbc::button label="Action" />
            @endslot
        </x-mbc::snackbar>
        
        <x-mbc::snackbar id="snackbar-leading" variant="leading" message="Leading layout (action on left)">
            @slot('action')
                <x-mbc::button label="Action" />
            @endslot
        </x-mbc::snackbar>
        
        <x-mbc::snackbar id="snackbar-stacked" variant="stacked" message="Stacked layout (action below message)">
            @slot('action')
                <x-mbc::button label="Action" />
            @endslot
        </x-mbc::snackbar>
        
        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
            <x-mbc::button label="Default Variant" variant="outlined" 
                onclick="document.getElementById('snackbar-default').MDCSnackbar.open()" />
            <x-mbc::button label="Leading Variant" variant="outlined" 
                onclick="document.getElementById('snackbar-leading').MDCSnackbar.open()" />
            <x-mbc::button label="Stacked Variant" variant="outlined" 
                onclick="document.getElementById('snackbar-stacked').MDCSnackbar.open()" />
        </div>

        @slot('code')
            @include('pages.components.snackbar._codes.variants')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Use Case:</strong> Use <code>stacked</code> for longer messages with actions, <code>leading</code> for left-aligned actions, and <code>default</code> for standard right-aligned layouts.
    </x-mbc::typography>
</section>
