@php
    $title = 'Starred Items';
@endphp

@extends('pages.components.app-bar._iframes.layout', [$title])

@section('app-bar')
    <x-mbc::app-bar color="secondary">
        @slot('start')
            <x-mbc::icon-button icon="menu" color="inherit" aria-label="Open navigation menu" />
        @endslot

        @slot('title')
            <div style="display: flex; align-items: center; gap: 8px;">
                <x-mbc::icon name="star" />
                {{ $title }}
            </div>
        @endslot

        @slot('end')
            <x-mbc::icon-button icon="search" color="inherit" aria-label="Search" />
            <x-mbc::icon-button icon="filter_list" color="inherit" aria-label="Filter" />
            <x-mbc::icon-button icon="more_vert" color="inherit" aria-label="Options" />
        @endslot
    </x-mbc::app-bar>
@endsection
