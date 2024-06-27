@php
    $id = str_replace(' ', '-', strtolower(trim($slot)));
@endphp

<a
    href="#{{ $id }}"
    class="header-anchor"
>
    <x-mbc::typography
        variant="h5"
        element="h3"
        :id="$id"
        {{ $attributes }}
    >
        {{ $slot }} <x-mbc::icon icon="link" />
    </x-mbc::typography>
</a>
