<section>
    <x-h2>Basic Chips</x-h2>

    <x-mbc::typography>
        Basic chips represent simple elements without complex interactions. They must be wrapped in a <code>chip-set</code> component with <code>variant="basic"</code> (default).
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::chip-set variant="basic">
            <x-mbc::chip label="Action" />
            <x-mbc::chip label="Comedy" />
            <x-mbc::chip label="Drama" />
            <x-mbc::chip label="Horror" />
            <x-mbc::chip label="Sci-Fi" />
        </x-mbc::chip-set>

        @slot('code')
            @include('pages.components.chip._codes.basic')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Note:</strong> Basic chips are typically used for displaying categories, tags, or non-interactive labels.
    </x-mbc::typography>
</section>
