<section>
    <x-h2>Special Variants</x-h2>

    <x-mbc::typography>
        Material Design includes special typography variants for specific use cases: <code>subtitle1</code>, <code>subtitle2</code>, <code>button</code>, <code>caption</code>, and <code>overline</code>.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 1.5rem;">
            <div>
                <x-mbc::typography variant="subtitle1">Subtitle 1</x-mbc::typography>
                <x-mbc::typography variant="body2">
                    Larger subtitle text, often used below headings. 16px, medium weight.
                </x-mbc::typography>
            </div>
            
            <div>
                <x-mbc::typography variant="subtitle2">Subtitle 2</x-mbc::typography>
                <x-mbc::typography variant="body2">
                    Smaller subtitle text. 14px, medium weight.
                </x-mbc::typography>
            </div>
            
            <div>
                <x-mbc::typography variant="button">BUTTON TEXT</x-mbc::typography>
                <x-mbc::typography variant="body2">
                    Button labels, all caps. 14px, medium weight.
                </x-mbc::typography>
            </div>
            
            <div>
                <x-mbc::typography variant="caption">Caption text</x-mbc::typography>
                <x-mbc::typography variant="body2">
                    Small annotations, image captions. 12px, regular weight.
                </x-mbc::typography>
            </div>
            
            <div>
                <x-mbc::typography variant="overline">OVERLINE TEXT</x-mbc::typography>
                <x-mbc::typography variant="body2">
                    Category labels, all caps with letter spacing. 10px, medium weight.
                </x-mbc::typography>
            </div>
        </div>

        @slot('code')
            @include('pages.components.typography._codes.special')
        @endslot
    </x-component-preview>
</section>
