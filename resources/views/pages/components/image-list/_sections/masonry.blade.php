<section>
    <x-h2>Masonry Layout</x-h2>

    <x-mbc::typography>
        The masonry layout creates a Pinterest-style grid where images of varying heights flow naturally. Use <code>variant="masonry"</code> to enable this layout.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::image-list variant="masonry">
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/30/400/300" 
                alt="Portrait image"
                label="Portrait Shot" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/31/400/600" 
                alt="Tall image"
                label="Vertical View" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/32/400/400" 
                alt="Square image"
                label="Square Format" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/33/400/250" 
                alt="Wide image"
                label="Wide Angle" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/34/400/500" 
                alt="Medium tall image"
                label="Medium Height" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/35/400/350" 
                alt="Landscape image"
                label="Landscape Mode" 
            />
        </x-mbc::image-list>

        @slot('code')
            @include('pages.components.image-list._codes.masonry')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Note:</strong> Masonry layout works best when images have varying aspect ratios. It creates a dynamic, Pinterest-style arrangement that optimizes vertical space.
    </x-mbc::typography>
</section>
