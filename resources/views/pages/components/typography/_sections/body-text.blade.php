<section>
    <x-h2>Body Text</x-h2>

    <x-mbc::typography>
        The <code>body1</code> and <code>body2</code> variants are the most commonly used for text content.
        <code>body1</code> is the default variant when no variant is specified.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 0.5rem; flex-direction: column;">
            <x-mbc::typography variant="body1">
                body1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos blanditiis tenetur unde suscipit,
                quam beatae rerum inventore consectetur, neque doloribus, cupiditate numquam dignissimos laborum.
            </x-mbc::typography>
            <x-mbc::typography variant="body2">
                body2. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos blanditiis tenetur unde suscipit,
                quam beatae rerum inventore consectetur, neque doloribus, cupiditate numquam dignissimos laborum.
            </x-mbc::typography>
        </div>

        @slot('code')
            @include('pages.components.typography._codes.body-text')
        @endslot
    </x-component-preview>
</section>
