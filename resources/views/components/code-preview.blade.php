{{-- TODO: rename to component preview --}}
<div class="mbc-mx-8">
    <x-mbc::card
        variant="outlined"
        class="mbc-p-2"
        style="background-color: #FAFAFA"
    >
        {{ $slot }}
    </x-mbc::card>

    @if (isset($code) || isset($codeSummary))
        @php
            $id = uniqid();
        @endphp
    @endif

    @isset($code)
        <x-mbc::button
            onclick="
            switch (this.innerText) {
                case 'SHOW CODE':
                    this.innerText = 'HIDE CODE';
                    break;

                case 'HIDE CODE':
                    this.innerText = 'SHOW CODE';
                    break;

                case 'EXPAND CODE':
                    this.innerText = 'COLLAPSE CODE';
                    break;

                case 'COLLAPSE CODE':
                    this.innerText = 'EXPAND CODE';
                    break;
            
                default:
                    throw new Error('Invalid button text');
                    break;
            }
            document.getElementById('{{ $id }}').classList.toggle('show')
            document.getElementById('{{ $id }}-summary').classList.toggle('show')
        "
        >
            @if (isset($codeSummary))
                EXPAND CODE
            @else
                SHOW CODE
            @endif
        </x-mbc::button>

        <pre
            id="{{ $id }}"
            class="src-code"
            style="border-radius: var(--mdc-shape-medium, 4px);"
            @class(['show' => true])
        ><code class="language-php">{{ $code }}</code></pre>
    @endisset

    @isset($codeSummary)
        <pre
            id="{{ $id }}-summary"
            style="border-radius: var(--mdc-shape-medium, 4px);"
            @class(['src-code', 'show' => true])
        ><code class="language-php">{{ $codeSummary }}</code></pre>
    @endisset
</div>
