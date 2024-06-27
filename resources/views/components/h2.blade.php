@php
    $id = str_replace(' ', '-', strtolower(trim($slot)));
@endphp

<a
    href="#{{ $id }}"
    class="header-anchor"
>
    <x-mbc::typography
        variant="h4"
        element="h2"
        :id="$id"
        {{ $attributes }}
    >
        {{ $slot }} <x-mbc::icon icon="link" />
    </x-mbc::typography>
</a>
