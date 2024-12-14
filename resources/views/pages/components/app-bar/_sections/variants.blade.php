<section>
    <x-h2>Variants</x-h2>

    <x-mbc::typography>
        The App Bar can have different variants. The variant can be set using the <code>variant</code> prop.
    </x-mbc::typography>

    <section>
        <x-h3>
            Basic
        </x-h3>

        <x-mbc::typography>
            The basic variant is the default variant of the App Bar. It has a height of 64px.
        </x-mbc::typography>

        <x-component-preview>
            <iframe src="{{ route('components.app-bar._iframes.basic') }}"></iframe>

            @slot('codeSummary')
                @include('pages.components.app-bar._codes.variants--summary')
            @endslot
        </x-component-preview>
    </section>

    @foreach ([
        'dense' => 'The dense variant is a smaller variant of the App Bar. It has a height of 48px.',
        'short' => 'The short variant is a smaller variant of the App Bar. It has a height of 56px.',
        'short-collapsed' => 'The short-collapsed variant is a smaller variant of the App Bar. It has a height of 56px. The short-collapsed variant is collapsed by default.',
        'prominent' => 'The prominent variant is a larger variant of the App Bar. It has a height of 128px.',
    ] as $key => $desc)
        <section>
            <x-h3>
                <code>{{ $key }}</code>
            </x-h3>

            <x-mbc::typography>
                {{ $desc }}
            </x-mbc::typography>

            <x-component-preview>
                <iframe src="{{ route('components.app-bar._iframes.variants', [$key]) }}"></iframe>
            </x-component-preview>
        </section>
    @endforeach
</section>
