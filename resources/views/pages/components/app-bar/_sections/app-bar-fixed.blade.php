<section>
    <x-h2>Fixed App Bar</x-h2>

    <x-mbc::typography>
    </x-mbc::typography>

    <x-component-preview>
        <iframe src="{{ route('components.app-bar._iframes.fixed') }}"></iframe>

        @slot('codeSummary')
            @include('pages.components.app-bar._codes.fixed--summary')
        @endslot
    </x-component-preview>
</section>

