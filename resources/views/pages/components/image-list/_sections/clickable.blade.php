<section>
    <x-h2>Clickable Images</x-h2>

    <x-mbc::typography>
        Make images clickable by adding the <code>href</code> prop. This converts the image container to a link, making the entire image area interactive.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::image-list>
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/50/400/300" 
                alt="Product 1"
                label="View Product 1"
                href="https://example.com/product-1" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/51/400/300" 
                alt="Product 2"
                label="View Product 2"
                href="https://example.com/product-2" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/52/400/300" 
                alt="Product 3"
                label="View Product 3"
                href="https://example.com/product-3" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/53/400/300" 
                alt="Product 4"
                label="View Product 4"
                href="https://example.com/product-4" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/54/400/300" 
                alt="Product 5"
                label="View Product 5"
                href="https://example.com/product-5" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/55/400/300" 
                alt="Product 6"
                label="View Product 6"
                href="https://example.com/product-6" 
            />
        </x-mbc::image-list>

        @slot('code')
            @include('pages.components.image-list._codes.clickable')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Clickable images are perfect for product galleries, portfolio items, or any scenario where users should be able to navigate to a detail page. Hover over the images above to see the interactive effect.
    </x-mbc::typography>
</section>
