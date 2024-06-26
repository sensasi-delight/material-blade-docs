@php
    $id = str_replace(' ', '-', strtolower(trim($slot)));
@endphp

<x-mbc::typography variant="h3" element="h1" :id="$id">{{ $slot }}</x-mbc::typography>
