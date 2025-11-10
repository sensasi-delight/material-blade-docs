<section>
    <x-h2>Plain Tooltip</x-h2>

    <x-mbc::typography>
        Plain tooltips display simple text information when hovering over an element. Use the <code>title</code> prop to set the tooltip text.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 2rem; align-items: center; padding: 2rem; flex-wrap: wrap;">
            <x-mbc::tooltip title="Add to favorites">
                <x-mbc::icon-button icon="favorite" />
            </x-mbc::tooltip>

            <x-mbc::tooltip title="Share this item">
                <x-mbc::icon-button icon="share" />
            </x-mbc::tooltip>

            <x-mbc::tooltip title="Delete permanently">
                <x-mbc::icon-button icon="delete" />
            </x-mbc::tooltip>

            <x-mbc::tooltip title="Click to see more options">
                <x-mbc::button label="Options" variant="raised" />
            </x-mbc::tooltip>
        </div>

        @slot('code')
            @include('pages.components.tooltip._codes.plain')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Note:</strong> Tooltips appear on hover, focus, and long press. They automatically position themselves to stay within the viewport.
    </x-mbc::typography>
</section>
