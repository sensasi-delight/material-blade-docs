@php
    $id = str_replace(' ', '-', strtolower(trim($slot)));
@endphp

<x-mbc::typography variant="h4" element="h2" :id="$id" {{ $attributes }}>
    <a href="#{{ $id }}" class="header-anchor">
        {{ $slot }} <x-mbc::icon name="link" />
    </a>
</x-mbc::typography>
