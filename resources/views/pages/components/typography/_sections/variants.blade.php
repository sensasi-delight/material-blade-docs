<section>
    <x-h2>Variants</x-h2>

    <x-mbc::typography>
        The Typography component supports all Material Design typography variants. Each variant applies specific font
        sizes, weights, and line heights according to Material Design guidelines.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 0.5rem; flex-direction: column;">
            <x-mbc::typography variant="h1">h1. Heading</x-mbc::typography>
            <x-mbc::typography variant="h2">h2. Heading</x-mbc::typography>
            <x-mbc::typography variant="h3">h3. Heading</x-mbc::typography>
            <x-mbc::typography variant="h4">h4. Heading</x-mbc::typography>
            <x-mbc::typography variant="h5">h5. Heading</x-mbc::typography>
            <x-mbc::typography variant="h6">h6. Heading</x-mbc::typography>
            <x-mbc::typography variant="subtitle1">subtitle1. Subtitle</x-mbc::typography>
            <x-mbc::typography variant="subtitle2">subtitle2. Subtitle</x-mbc::typography>
            <x-mbc::typography variant="body1">body1. Lorem ipsum dolor sit amet</x-mbc::typography>
            <x-mbc::typography variant="body2">body2. Lorem ipsum dolor sit amet</x-mbc::typography>
            <x-mbc::typography variant="button">button text</x-mbc::typography>
            <x-mbc::typography variant="caption">caption text</x-mbc::typography>
            <x-mbc::typography variant="overline">overline text</x-mbc::typography>
        </div>

        @slot('code')
            @include('pages.components.typography._codes.variants')
        @endslot
    </x-component-preview>
</section>
