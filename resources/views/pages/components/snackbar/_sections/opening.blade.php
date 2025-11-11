<section>
    <x-h2>Opening Snackbar</x-h2>

    <x-mbc::typography>
        In production, snackbars are opened programmatically using JavaScript. The Material Design Components library provides the MDCSnackbar class for this purpose.
    </x-mbc::typography>

    <x-component-preview>
        <div style="background: #f5f5f5; padding: 2rem; border-radius: 4px;">
            <x-mbc::typography variant="subtitle1" gutterBottom>JavaScript Example</x-mbc::typography>
            
            <x-mbc::typography variant="body2" gutterBottom>
                To open a snackbar programmatically, you need to:
            </x-mbc::typography>
            
            <ol style="margin: 1rem 0; padding-left: 1.5rem;">
                <li style="margin-bottom: 0.5rem;">Add an <code>id</code> to your snackbar component</li>
                <li style="margin-bottom: 0.5rem;">Initialize the MDCSnackbar instance</li>
                <li style="margin-bottom: 0.5rem;">Call the <code>open()</code> method when needed</li>
            </ol>

            <div style="background: white; padding: 1rem; border-radius: 4px; margin-top: 1rem;">
                <x-mbc::typography variant="caption" style="color: #666; display: block; margin-bottom: 0.5rem;">
                    HTML:
                </x-mbc::typography>
                <pre style="margin: 0; overflow-x: auto;"><code>&lt;x-mbc::snackbar id="my-snackbar" message="Success!" /&gt;</code></pre>
            </div>

            <div style="background: white; padding: 1rem; border-radius: 4px; margin-top: 1rem;">
                <x-mbc::typography variant="caption" style="color: #666; display: block; margin-bottom: 0.5rem;">
                    JavaScript:
                </x-mbc::typography>
                <pre style="margin: 0; overflow-x: auto;"><code>// Get the snackbar element
const snackbarEl = document.getElementById('my-snackbar');

// Initialize MDCSnackbar
const snackbar = new mdc.snackbar.MDCSnackbar(snackbarEl);

// Open the snackbar
snackbar.open();

// Auto-close after 5 seconds (5000ms)
snackbar.timeoutMs = 5000;

// Listen for closing event
snackbar.listen('MDCSnackbar:closed', (event) => {
    console.log('Snackbar closed:', event.detail.reason);
});</code></pre>
            </div>
        </div>

        @slot('code')
            @include('pages.components.snackbar._codes.opening')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Documentation:</strong> For complete API documentation, see the <a href="https://material-components.github.io/material-components-web-catalog/#/component/snackbar" target="_blank">Material Components Web Snackbar documentation</a>.
    </x-mbc::typography>
</section>
