@php
    $id = str_replace(' ', '-', strtolower(trim($slot)));
@endphp

<x-mbc::typography variant="h4"
                   element="h2"
                   :id="$id">{{ $slot }}</x-mbc::typography>
