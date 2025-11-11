@php
    $title = 'Page Title';
@endphp

@extends('pages.components.app-bar._iframes.layout', [$title])

@section('app-bar')
    <x-mbc::app-bar :title="$title">
        @slot('start')
            <x-mbc::icon-button icon="menu" color="inherit" aria-label="Open navigation menu" />
        @endslot

        @slot('end')
            <x-mbc::icon-button icon="search" color="inherit" aria-label="Search" />
            <x-mbc::icon-button icon="more_vert" color="inherit" aria-label="Options" />
        @endslot
    </x-mbc::app-bar>
@endsection
