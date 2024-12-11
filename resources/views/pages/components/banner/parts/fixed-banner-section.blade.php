<section>
    <x-h2>Fixed Banner</x-h2>

    <x-mbc::alert severity="info">
        For the example below, the banner is fixed at the top of the screen using <code>&lt;iframe /></code> element to
        contain the banner.
    </x-mbc::alert>

    <x-component-preview>
        <iframe src="{{ route('components.banner.parts.fixed-banner-preview') }}"></iframe>

        @slot('code')
            {{-- prettier-ignore-start --}}
&lt;x-mbc::banner open fixed>
    There was a problem processing a transaction on your credit card.

    &commat;slot('actions')
        &lt;x-mbc::button label="Fix it" variant="text" />
        &lt;x-mbc::button label="Learn more" variant="text" />
    &commat;endslot
&lt;/x-mbc::banner>
            {{-- prettier-ignore-end--}}
        @endslot
        @slot('codeSummary')
            {{-- prettier-ignore-start --}}
&lt;x-mbc::banner open fixed>
    // banner content
&lt;/x-mbc::banner>
{{-- prettier-ignore-end--}}
        @endslot
    </x-component-preview>
</section>
