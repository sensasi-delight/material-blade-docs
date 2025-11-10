<section>
    <x-h2>Progress Sizes</x-h2>

    <x-mbc::typography>
        Circular progress supports multiple sizes: default (48px), medium (36px), small (24px), or custom sizes. Use the <code>size</code> prop to control the dimensions.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 3rem; align-items: center; justify-content: center; flex-wrap: wrap;">
            <div style="text-align: center;">
                <x-mbc::circular-progress size="small" :value="0.75" aria-label="Small progress indicator" />
                <x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">Small (24px)</x-mbc::typography>
            </div>

            <div style="text-align: center;">
                <x-mbc::circular-progress size="medium" :value="0.75" aria-label="Medium progress indicator" />
                <x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">Medium (36px)</x-mbc::typography>
            </div>

            <div style="text-align: center;">
                <x-mbc::circular-progress :value="0.75" aria-label="Default progress indicator" />
                <x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">Default (48px)</x-mbc::typography>
            </div>

            <div style="text-align: center;">
                <x-mbc::circular-progress size="64px" :value="0.75" aria-label="Large progress indicator" />
                <x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">Custom (64px)</x-mbc::typography>
            </div>
        </div>

        @slot('code')
            @include('pages.components.progress-indicator._codes.sizes')
        @endslot>
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Choose the size based on context. Use small for inline indicators, medium for cards or lists, and default/large for prominent loading states.
    </x-mbc::typography>
</section>
