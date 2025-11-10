<section>
    <x-h2>Gutter Bottom</x-h2>

    <x-mbc::typography>
        The <code>gutterBottom</code> prop adds bottom margin to text for proper visual spacing between elements. By default, the component has no margin.
    </x-mbc::typography>

    <x-component-preview>
        <div>
            <x-mbc::typography variant="h4" gutterBottom>
                Heading with Gutter Bottom
            </x-mbc::typography>
            <x-mbc::typography variant="body1">
                This paragraph has proper spacing from the heading above because the gutterBottom prop is used.
            </x-mbc::typography>
            
            <hr style="margin: 2rem 0; border: none; border-top: 1px solid #e0e0e0;">
            
            <x-mbc::typography variant="h4">
                Heading without Gutter Bottom
            </x-mbc::typography>
            <x-mbc::typography variant="body1">
                This paragraph has no spacing from the heading above. Notice the difference.
            </x-mbc::typography>
        </div>

        @slot('code')
            @include('pages.components.typography._codes.gutter')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Use <code>gutterBottom</code> on headings and elements that need visual separation from the next content.
    </x-mbc::typography>
</section>
