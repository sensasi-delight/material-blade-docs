<section>
    <x-h2>Circular Progress</x-h2>

    <x-mbc::typography>
        Circular progress indicators display progress by animating an indicator along a circular track. They're ideal for confined spaces or when showing progress inline.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 2rem; align-items: center; justify-content: center; flex-wrap: wrap;">
            <div style="text-align: center;">
                <x-mbc::circular-progress :value="0.25" aria-label="25 percent progress" />
                <x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">25%</x-mbc::typography>
            </div>

            <div style="text-align: center;">
                <x-mbc::circular-progress :value="0.5" aria-label="50 percent progress" />
                <x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">50%</x-mbc::typography>
            </div>

            <div style="text-align: center;">
                <x-mbc::circular-progress :value="0.75" aria-label="75 percent progress" />
                <x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">75%</x-mbc::typography>
            </div>

            <div style="text-align: center;">
                <x-mbc::circular-progress :value="1.0" aria-label="100 percent progress" />
                <x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">100%</x-mbc::typography>
            </div>
        </div>

        @slot('code')
            @include('pages.components.progress-indicator._codes.circular')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Circular progress indicators work well in buttons, cards, or anywhere space is limited. They provide visual feedback without taking up much room.
    </x-mbc::typography>
</section>
