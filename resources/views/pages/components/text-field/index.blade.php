@php
    $pageData = [
        'title' => 'Text Field',
        'metas' => [
            'description' => 'Material Design Text Field component for Laravel Blade - Text fields let users enter and edit text',
        ],
        'headings' => [
            'Basic Text Field',
            'Variants',
            'Text Field with Icons',
            'Helper Text',
            'Prefix and Suffix',
            'Textarea',
            'Character Counter',
            'Input Types',
        ],
        'referenceLinks' => [
            'https://m2.material.io/components/text-fields',
            'https://material-components.github.io/material-components-web-catalog/#/component/text-field',
        ],
        'componentsProps' => [
            'mbc::text-field' => [
                ['variant', 'string', 'filled', 'Text field variant: filled or outlined'],
                ['label', 'string', 'null', 'The floating label text'],
                ['helperText', 'string', 'null', 'Helper text displayed below the text field'],
                ['helperTextPersistent', 'boolean', 'false', 'Whether helper text should always be visible'],
                ['helperTextValidation', 'boolean', 'false', 'Whether helper text is a validation message'],
                ['textarea', 'boolean', 'false', 'Whether to render as textarea'],
                ['rows', 'int', 'null', 'Number of rows for textarea'],
                ['cols', 'int', 'null', 'Number of columns for textarea'],
                ['prefix', 'string', 'null', 'Prefix text (e.g., currency symbol)'],
                ['suffix', 'string', 'null', 'Suffix text (e.g., unit of measurement)'],
                ['leadingIcon', 'string|array', 'null', 'Icon to display at the start of the field'],
                ['trailingIcon', 'string|array', 'null', 'Icon to display at the end of the field'],
                ['characterCounter', 'boolean', 'false', 'Whether to show character counter (requires maxlength)'],
                ['endAligned', 'boolean', 'false', 'Whether to align text to the end'],
                ['type', 'string', 'text', 'HTML input type (text, email, password, number, etc.)'],
                ['disabled', 'boolean', 'false', 'Whether the text field is disabled'],
                ['required', 'boolean', 'false', 'Whether the text field is required'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>
        Text fields let users enter and edit text. They typically appear in forms and dialogs.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 1.5rem; max-width: 400px;">
            <x-mbc::text-field label="First Name" id="basic-firstname" />
            <x-mbc::text-field label="Email Address" type="email" id="basic-email" />
        </div>

        @slot('codeSummary')
            @include('pages.components.text-field._codes.description-summary')
        @endslot
    </x-component-preview>
@endsection

@section('content')
    @include('pages.components.text-field._sections.basic')
    @include('pages.components.text-field._sections.variants')
    @include('pages.components.text-field._sections.icons')
    @include('pages.components.text-field._sections.helper-text')
    @include('pages.components.text-field._sections.prefix-suffix')
    @include('pages.components.text-field._sections.textarea')
    @include('pages.components.text-field._sections.character-counter')
    @include('pages.components.text-field._sections.input-types')
@endsection
