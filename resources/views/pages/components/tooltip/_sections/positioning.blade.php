<section>
    <x-h2>Tooltip Positioning</x-h2>

    <x-mbc::typography>
        Tooltips automatically position themselves to stay within the viewport. They adjust their placement based on available space around the anchor element.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; padding: 3rem; min-height: 300px;">
            <div style="display: flex; justify-content: center; align-items: start;">
                <x-mbc::tooltip title="Tooltip at top">
                    <x-mbc::button label="Top" variant="outlined" />
                </x-mbc::tooltip>
            </div>

            <div></div>

            <div style="display: flex; justify-content: center; align-items: start;">
                <x-mbc::tooltip title="Tooltip at top right">
                    <x-mbc::button label="Top Right" variant="outlined" />
                </x-mbc::tooltip>
            </div>

            <div style="display: flex; justify-content: start; align-items: center;">
                <x-mbc::tooltip title="Tooltip on left">
                    <x-mbc::button label="Left" variant="outlined" />
                </x-mbc::tooltip>
            </div>

            <div style="display: flex; justify-content: center; align-items: center;">
                <x-mbc::tooltip title="Tooltip at center">
                    <x-mbc::button label="Center" variant="outlined" />
                </x-mbc::tooltip>
            </div>

            <div style="display: flex; justify-content: end; align-items: center;">
                <x-mbc::tooltip title="Tooltip on right">
                    <x-mbc::button label="Right" variant="outlined" />
                </x-mbc::tooltip>
            </div>

            <div style="display: flex; justify-content: center; align-items: end;">
                <x-mbc::tooltip title="Tooltip at bottom">
                    <x-mbc::button label="Bottom" variant="outlined" />
                </x-mbc::tooltip>
            </div>

            <div></div>

            <div style="display: flex; justify-content: center; align-items: end;">
                <x-mbc::tooltip title="Tooltip at bottom right">
                    <x-mbc::button label="Bottom Right" variant="outlined" />
                </x-mbc::tooltip>
            </div>
        </div>

        @slot('code')
            @include('pages.components.tooltip._codes.positioning')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Note:</strong> Material Design tooltips use intelligent positioning that adapts based on available screen space. You don't need to specify position manually.
    </x-mbc::typography>
</section>
