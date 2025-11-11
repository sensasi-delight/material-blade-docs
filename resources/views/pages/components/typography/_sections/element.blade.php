<section>
    <x-h2>Custom HTML Element</x-h2>

    <x-mbc::typography>
        Use the <code>element</code> prop to change the rendered HTML element. By default, the component will choose an appropriate element based on the variant (e.g., <code>h1</code> for <code>h1</code> variant, <code>p</code> for <code>body1</code>).
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 1rem;">
            <x-mbc::typography variant="h5" element="h1">
                Text with H5 styling but H1 HTML element
            </x-mbc::typography>
            
            <x-mbc::typography variant="body1" element="div">
                Body1 text rendered as div, not p
            </x-mbc::typography>
            
            <x-mbc::typography variant="button" element="span">
                Button text as inline span
            </x-mbc::typography>
        </div>

        @slot('code')
            @include('pages.components.typography._codes.element')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Note:</strong> Using custom elements is useful for maintaining proper semantic HTML structure while preserving the desired visual style.
    </x-mbc::typography>
</section>
