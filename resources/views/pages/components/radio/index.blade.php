@php
    $pageData = [
        'title' => 'Radio Button',
        'metas' => [
            'description' => 'Material Design Radio Button component for Laravel Blade - Radio buttons allow users to select one option from a set',
        ],
        'headings' => [
            'Basic Radio Buttons',
            'Radio with Labels',
            'Radio Groups',
            'Radio Colors',
            'Disabled State',
            'Touch Target',
        ],
        'referenceLinks' => [
            'https://m2.material.io/components/radio-buttons',
            'https://material-components.github.io/material-components-web-catalog/#/component/radio',
        ],
        'componentsProps' => [
            'mbc::radio' => [
                ['label', 'string', 'null', 'Label text displayed next to the radio button'],
                ['color', 'string', 'secondary', 'Radio button color (primary, secondary, or custom color)'],
                ['touch', 'boolean', 'false', 'Add 48x48 touch target wrapper for better mobile accessibility'],
                ['id', 'string', 'required', 'Unique identifier for the radio button (required for labels)'],
                ['name', 'string', 'required', 'Group name - radios with same name belong to same group'],
                ['value', 'string', 'required', 'The value submitted when this radio is selected'],
                ['checked', 'boolean', 'false', 'Whether the radio button is initially selected'],
                ['disabled', 'boolean', 'false', 'Whether the radio button is disabled'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>
        Radio buttons allow users to select one option from a set. Use radio buttons when you want users to see all available options and only one option in a group can be selected at a time.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 0.5rem;">
            <x-mbc::radio id="radio-default-1" name="default-group" value="option1" label="Option 1" checked />
            <x-mbc::radio id="radio-default-2" name="default-group" value="option2" label="Option 2" />
            <x-mbc::radio id="radio-default-3" name="default-group" value="option3" label="Option 3" />
        </div>

        @slot('codeSummary')
            @include('pages.components.radio._codes.description-summary')
        @endslot
    </x-component-preview>
@endsection

@section('content')
    @include('pages.components.radio._sections.basic')
    @include('pages.components.radio._sections.labels')
    @include('pages.components.radio._sections.groups')
    @include('pages.components.radio._sections.colors')
    @include('pages.components.radio._sections.disabled')
    @include('pages.components.radio._sections.touch')
@endsection
