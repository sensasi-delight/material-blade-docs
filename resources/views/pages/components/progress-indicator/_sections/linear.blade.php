<section>
    <x-h2>Linear Progress</x-h2>

    <x-mbc::typography>
        Linear progress indicators display progress along a horizontal line. They're commonly used at the top of screens or within cards to show loading states.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 1.5rem; width: 100%;">
            <div>
                <x-mbc::typography variant="body2" gutterBottom>25% Complete</x-mbc::typography>
                <x-mbc::linear-progress :value="0.25" aria-label="25 percent complete" />
            </div>

            <div>
                <x-mbc::typography variant="body2" gutterBottom>50% Complete</x-mbc::typography>
                <x-mbc::linear-progress :value="0.5" aria-label="50 percent complete" />
            </div>

            <div>
                <x-mbc::typography variant="body2" gutterBottom>75% Complete</x-mbc::typography>
                <x-mbc::linear-progress :value="0.75" aria-label="75 percent complete" />
            </div>

            <div>
                <x-mbc::typography variant="body2" gutterBottom>100% Complete</x-mbc::typography>
                <x-mbc::linear-progress :value="1.0" aria-label="100 percent complete" />
            </div>
        </div>

        @slot('code')
            @include('pages.components.progress-indicator._codes.linear')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Note:</strong> The <code>value</code> prop accepts a float between 0 and 1, where 0.5 represents 50% progress. The <code>aria-label</code> attribute is required for accessibility.
    </x-mbc::typography>
</section>
