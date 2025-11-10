<section>
    <x-h2>Indeterminate Progress</x-h2>

    <x-mbc::typography>
        Indeterminate indicators visualize an unspecified wait time. Use them when the progress percentage is unknown. Simply omit the <code>value</code> prop or set it to <code>null</code>.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem; width: 100%;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Loading Application</x-mbc::typography>
                <x-mbc::linear-progress aria-label="Loading application" />
                <x-mbc::typography variant="caption" style="color: #666; margin-top: 4px;">Please wait...</x-mbc::typography>
            </div>

            <div style="display: flex; gap: 3rem; align-items: center; justify-content: center;">
                <div style="text-align: center;">
                    <x-mbc::circular-progress aria-label="Loading data" />
                    <x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">Loading...</x-mbc::typography>
                </div>

                <div style="text-align: center;">
                    <x-mbc::circular-progress aria-label="Processing request" />
                    <x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">Processing...</x-mbc::typography>
                </div>

                <div style="text-align: center;">
                    <x-mbc::circular-progress aria-label="Syncing data" />
                    <x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">Syncing...</x-mbc::typography>
                </div>
            </div>
        </div>

        @slot('code')
            @include('pages.components.progress-indicator._codes.indeterminate')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Use Case:</strong> Initial page loads, API requests with unknown duration, background sync, searching, waiting for server response.
    </x-mbc::typography>
</section>
