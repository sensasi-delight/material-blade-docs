<section>
    <x-h2>Body Text</x-h2>

    <x-mbc::typography>
        Body variants are used for regular paragraph text. <code>body1</code> is the default variant and is suitable for most text content.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 1.5rem;">
            <div>
                <x-mbc::typography variant="body1">
                    Body 1 is the default style for paragraph text. It's 16px with comfortable line-height 
                    for reading. Use for main article content or long descriptions.
                </x-mbc::typography>
            </div>
            
            <div>
                <x-mbc::typography variant="body2">
                    Body 2 is slightly smaller at 14px. Ideal for secondary text, 
                    longer captions, or additional notes.
                </x-mbc::typography>
            </div>
        </div>

        @slot('code')
            @include('pages.components.typography._codes.body')
        @endslot
    </x-component-preview>
</section>
