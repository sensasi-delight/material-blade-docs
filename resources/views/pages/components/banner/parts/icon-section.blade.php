<section>
    <x-h2>Icon</x-h2>

    <x-component-preview>
        <x-mbc::banner open icon="error_outline">
            There was a problem processing a transaction on your credit card.

            @slot('actions')
                <x-mbc::button label="Fix it" variant="text" />
            @endslot
        </x-mbc::banner>

        @slot('code')
            {{-- prettier-ignore-start --}}
&lt;x-mbc::banner open icon="error_outline">
    There was a problem processing a transaction on your credit card.

    &commat;slot('actions')
        &lt;x-mbc::button label="Fix it" variant="text" />
    &commat;endslot
&lt;/x-mbc::banner>
            {{-- prettier-ignore-end--}}
        @endslot

        @slot('codeSummary')
            {{-- prettier-ignore-start --}}
&lt;x-mbc::banner open icon="error_outline">
    // Banner content
&lt;/x-mbc::banner>
{{-- prettier-ignore-end--}}
        @endslot
    </x-component-preview>
</section>
