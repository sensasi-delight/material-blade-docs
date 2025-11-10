<section>
    <x-h2>Standard Image List</x-h2>

    <x-mbc::typography>
        The standard image list displays images in a responsive grid layout. Each image maintains its aspect ratio within the grid cells.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::image-list>
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/10/400/300" 
                alt="Landscape photo" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/11/400/300" 
                alt="Nature photo" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/12/400/300" 
                alt="Architecture photo" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/13/400/300" 
                alt="City photo" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/14/400/300" 
                alt="Travel photo" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/15/400/300" 
                alt="Wildlife photo" 
            />
        </x-mbc::image-list>

        @slot('code')
            @include('pages.components.image-list._codes.standard')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Note:</strong> The standard layout creates a responsive grid that adapts to screen size. Images are displayed in a consistent grid pattern.
    </x-mbc::typography>
</section>
