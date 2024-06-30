@php
    $id = str_replace(' ', '-', strtolower(trim($slot)));
@endphp

<x-mbc::typography
    variant="h5"
    element="h3"
    :id="$id"
    {{ $attributes }}
>
    <a
        href="#{{ $id }}"
        class="header-anchor"
    >
        {{ $slot }} <x-mbc::icon name="link" />
    </a>
</x-mbc::typography>
