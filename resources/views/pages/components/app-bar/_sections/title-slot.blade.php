<x-h2>Title Slot</x-h2>

<x-mbc::typography>
    The App Bar component supports both a simple <code>title</code> attribute and a more flexible <code>title</code> slot for custom content.
</x-mbc::typography>

<x-h3>Using Title Attribute</x-h3>

<x-mbc::typography>
    For simple text titles, you can use the <code>title</code> attribute:
</x-mbc::typography>

<x-component-preview>
    <iframe src="{{ route('components.app-bar._iframes.title-attribute') }}"></iframe>

    @slot('codeSummary')
        @include('pages.components.app-bar._codes.title-attribute--summary')
    @endslot

    @slot('code')
        @include('pages.components.app-bar._codes.title-attribute')
    @endslot
</x-component-preview>

<x-h3>Using Title Slot</x-h3>

<x-mbc::typography>
    For more complex content like icons, badges, or styled text, use the <code>title</code> slot:
</x-mbc::typography>

<x-component-preview>
    <iframe src="{{ route('components.app-bar._iframes.title-slot') }}"></iframe>

    @slot('codeSummary')
        @include('pages.components.app-bar._codes.title-slot--summary')
    @endslot

    @slot('code')
        @include('pages.components.app-bar._codes.title-slot')
    @endslot
</x-component-preview>
