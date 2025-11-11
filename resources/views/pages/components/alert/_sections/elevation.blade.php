<x-h2>Elevation</x-h2>

<x-mbc::typography>
    The <code>elevation</code> attribute controls the Material Design elevation shadow of the alert. Elevation values range from 0 to 24, with higher values creating deeper shadows.
</x-mbc::typography>

<x-component-preview>
    <div style="display: flex; flex-direction: column; gap: 16px;">
        <x-mbc::alert elevation="0" variant="outlined">
            Elevation 0 - No shadow (default)
        </x-mbc::alert>

        <x-mbc::alert elevation="4" variant="outlined">
            Elevation 4 - Subtle shadow
        </x-mbc::alert>

        <x-mbc::alert elevation="8" variant="outlined">
            Elevation 8 - Medium shadow
        </x-mbc::alert>

        <x-mbc::alert elevation="16" variant="outlined" severity="info">
            Elevation 16 - Deep shadow
        </x-mbc::alert>

        <x-mbc::alert elevation="24" variant="outlined" severity="warning">
            Elevation 24 - Maximum shadow
        </x-mbc::alert>
    </div>

    @slot('codeSummary')
        @include('pages.components.alert._codes.elevation--summary')
    @endslot

    @slot('code')
        @include('pages.components.alert._codes.elevation')
    @endslot
</x-component-preview>

<x-mbc::typography>
    Elevation works with all variants and can be combined with different severities and colors to create visually distinct alerts.
</x-mbc::typography>
