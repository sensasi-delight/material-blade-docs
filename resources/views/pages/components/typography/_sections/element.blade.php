<section>
    <x-h2>Custom Element</x-h2>

    <x-mbc::typography>
        By default, the Typography component automatically selects the appropriate HTML element based on the variant.
        However, you can override this behavior using the <code>element</code> attribute to render a different HTML tag
        while maintaining the visual style of the specified variant.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 0.5rem; flex-direction: column;">
            <x-mbc::typography variant="h2" element="div">
                This is h2 variant but rendered as div element
            </x-mbc::typography>
            <x-mbc::typography variant="body1" element="span">
                This is body1 variant but rendered as span element
            </x-mbc::typography>
        </div>

        @slot('code')
            @include('pages.components.typography._codes.element')
        @endslot
    </x-component-preview>
</section>
