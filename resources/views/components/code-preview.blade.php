<x-mbc::card variant="outlined" style="background-color: #FAFAFA; padding: 32px; display: flex; align-items: center; overflow: auto;">
    {{ $slot }}
</x-mbc::card>

<?php $id = uniqid(); ?>

<x-mbc::button variant="outlined" fullwidth onclick="
    document.getElementById('{{ $id }}').classList.toggle('show');
">
    Show code
</x-mbc::button>

<pre id="{{ $id }}" class="src-code"><code class="language-php">{{ $code }}</code></pre>