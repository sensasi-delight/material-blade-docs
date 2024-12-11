@props([
    'lang' => 'php',
])

<div>
    @if (!$slot->isEmpty())
        <x-mbc::card
            class="mbc-p-2"
            style="background-color: #FAFAFA; overflow: auto;"
            variant="outlined"
        >
            {{ $slot }}
        </x-mbc::card>
    @endif

    @if (isset($code) || isset($codeSummary))
        @php
            $id = uniqid();
        @endphp
    @endif

    @isset($code)
        <x-mbc::button
            variant="text"
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
            document.getElementById('{{ $id }}')?.classList.toggle('show')
            document.getElementById('{{ $id }}-summary')?.classList.toggle('show')
        "
        >
            @if (isset($codeSummary))
                EXPAND CODE
            @else
                SHOW CODE
            @endif
        </x-mbc::button>

        <pre
            class="src-code"
            id="{{ $id }}"
            @class(['show' => true])
        ><code class="language-{{ $lang }}">{{ $code }}</code></pre>
    @endisset

    @isset($codeSummary)
        <pre
            id="{{ $id }}-summary"
            @class(['src-code', 'show' => true])
        ><code class="language-{{ $lang }}">{{ $codeSummary }}</code></pre>
    @endisset
</div>
