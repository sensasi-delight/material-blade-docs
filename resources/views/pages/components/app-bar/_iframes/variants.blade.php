@php
    $title = 'App Bar';
@endphp

@extends('pages.components.app-bar._iframes.layout', [$variant])

@section('app-bar')
    <x-mbc::AppBar :variant="$variant" :title="$variant">
        @slot('start')
            <x-mbc::IconButton aria-label="Open navigation menu" icon="menu" color="inherit" />
        @endslot

        @slot('end')
            <x-mbc::icon-button aria-label="Favorite" icon="favorite" color="inherit" />
            <x-mbc::icon-button aria-label="Search" icon="search" color="inherit" />
            <x-mbc::icon-button aria-label="Options" icon="more_vert" color="inherit" />
        @endslot

    </x-mbc::AppBar>
@endsection
