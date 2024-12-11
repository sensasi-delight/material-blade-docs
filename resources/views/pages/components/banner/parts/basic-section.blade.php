<section>
    <x-h2>Basic</x-h2>

    <x-component-preview>
        <x-mbc::banner open>
            There was a problem processing a transaction on your credit card.

            @slot('actions')
                <x-mbc::button
                    label="Fix it"
                    variant="text"
                />
                <x-mbc::button
                    label="Learn more"
                    variant="text"
                />
            @endslot
        </x-mbc::banner>

        @slot('code')
            {{-- prettier-ignore-start --}}
&lt;x-mbc::banner open>
    There was a problem processing a transaction on your credit card.

    &commat;slot('actions')
        &lt;x-mbc::button label="Fix it" variant="text" />
        &lt;x-mbc::button label="Learn more" variant="text" />
    &commat;endslot
&lt;/x-mbc::banner>
{{-- prettier-ignore-end--}}
        @endslot
    </x-component-preview>
</section>
