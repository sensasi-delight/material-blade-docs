<section>
    <x-h2>Text Protection</x-h2>

    <x-mbc::typography>
        When using labels over images, enable text protection with <code>withTextProtection</code> to add a dark scrim overlay. This ensures labels remain readable over any image.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::image-list :withTextProtection="true">
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/40/400/300" 
                alt="Bright landscape"
                label="Bright Landscape" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/41/400/300" 
                alt="Light colored photo"
                label="Light Background" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/42/400/300" 
                alt="White subject"
                label="High Contrast" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/43/400/300" 
                alt="Pastel colors"
                label="Soft Colors" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/44/400/300" 
                alt="Bright scene"
                label="Bright Scene" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/45/400/300" 
                alt="Light tones"
                label="Light Tones" 
            />
        </x-mbc::image-list>

        @slot('code')
            @include('pages.components.image-list._codes.protection')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Text protection adds a semi-transparent dark gradient overlay at the bottom of each image, ensuring white text labels remain legible regardless of the image content.
    </x-mbc::typography>
</section>
