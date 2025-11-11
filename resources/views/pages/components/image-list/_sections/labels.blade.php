<section>
    <x-h2>Image List with Labels</x-h2>

    <x-mbc::typography>
        Add descriptive labels to images using the <code>label</code> prop. Labels appear below each image as captions.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::image-list>
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/20/400/300" 
                alt="Mountain landscape"
                label="Mountain Vista" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/21/400/300" 
                alt="Ocean sunset"
                label="Ocean Sunset" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/22/400/300" 
                alt="Forest path"
                label="Forest Trail" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/23/400/300" 
                alt="City skyline"
                label="Urban Skyline" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/24/400/300" 
                alt="Desert dunes"
                label="Desert Landscape" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/25/400/300" 
                alt="Waterfall"
                label="Hidden Waterfall" 
            />
        </x-mbc::image-list>

        @slot('code')
            @include('pages.components.image-list._codes.labels')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Labels help users understand the content of each image. They're especially useful for galleries, portfolios, or product catalogs.
    </x-mbc::typography>
</section>
