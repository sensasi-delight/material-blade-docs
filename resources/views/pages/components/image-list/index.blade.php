@php
    $pageData = [
        'title' => 'Image List',
        'metas' => [
            'description' => 'Material Design Image List component for Laravel Blade - Display collections of images in an organized grid',
        ],
        'headings' => [
            'Standard Image List',
            'Image List with Labels',
            'Masonry Layout',
            'Text Protection',
            'Clickable Images',
        ],
        'referenceLinks' => [
            'https://m2.material.io/components/image-lists',
            'https://material-components.github.io/material-components-web-catalog/#/component/image-list',
        ],
        'componentsProps' => [
            'mbc::image-list' => [
                ['variant', 'string', 'standard', 'Layout variant: standard, masonry'],
                ['withTextProtection', 'boolean', 'false', 'Add dark scrim overlay to protect text labels'],
                ['slot', 'html', '', 'Image list items'],
            ],
            'mbc::image-list-item' => [
                ['src', 'string', 'null', 'Image source URL'],
                ['alt', 'string', 'null', 'Image alt text for accessibility'],
                ['label', 'string', 'null', 'Image caption/label displayed below the image'],
                ['href', 'string', 'null', 'Optional link URL to make the image clickable'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>
        Image lists display a collection of images in an organized grid. They are best suited for presenting homogeneous data, typically images, and optimize for responsive behavior.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::image-list>
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/1/400/300" 
                alt="Random image 1" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/2/400/300" 
                alt="Random image 2" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/3/400/300" 
                alt="Random image 3" 
            />
            <x-mbc::image-list-item 
                src="https://picsum.photos/seed/4/400/300" 
                alt="Random image 4" 
            />
        </x-mbc::image-list>

        @slot('codeSummary')
            @include('pages.components.image-list._codes.description-summary')
        @endslot
    </x-component-preview>
@endsection

@section('content')
    @include('pages.components.image-list._sections.standard')
    @include('pages.components.image-list._sections.labels')
    @include('pages.components.image-list._sections.masonry')
    @include('pages.components.image-list._sections.protection')
    @include('pages.components.image-list._sections.clickable')
@endsection
