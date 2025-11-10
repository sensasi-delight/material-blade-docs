<section>
    <x-h2>Filter Chips</x-h2>

    <x-mbc::typography>
        Filter chips allow users to refine content by selecting one or more options. Use <code>variant="filter"</code> on the chip-set and <code>selected</code> prop to mark chips as active. Filter chips show a checkmark when selected.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 1.5rem;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Filter by Category:</x-mbc::typography>
                <x-mbc::chip-set variant="filter">
                    <x-mbc::chip label="All" :selected="true" />
                    <x-mbc::chip label="Photos" icon="photo" />
                    <x-mbc::chip label="Videos" icon="videocam" />
                    <x-mbc::chip label="Documents" icon="description" />
                    <x-mbc::chip label="Music" icon="music_note" />
                </x-mbc::chip-set>
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Filter by Status:</x-mbc::typography>
                <x-mbc::chip-set variant="filter">
                    <x-mbc::chip label="Active" :selected="true" />
                    <x-mbc::chip label="Pending" :selected="true" />
                    <x-mbc::chip label="Completed" />
                    <x-mbc::chip label="Archived" />
                </x-mbc::chip-set>
            </div>
        </div>

        @slot('code')
            @include('pages.components.chip._codes.filter')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Note:</strong> Filter chips are ideal for multi-select filtering scenarios where users can select multiple options.
    </x-mbc::typography>
</section>
