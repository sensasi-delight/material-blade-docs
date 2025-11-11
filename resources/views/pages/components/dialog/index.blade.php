@php
    $desc = 'Dialogs inform users about a task and can contain critical information, require decisions, or involve multiple tasks.';

    $pageData = [
        'title' => 'Dialog',
        'metas' => [
            'description' => $desc,
        ],
        'headings' => ['Basic', 'With Title', 'Scrollable Content', 'Fullscreen Dialog', 'Dialog Actions'],
        'referenceLinks' => [
            'https://mui.com/material-ui/react-dialog/',
            'https://m2.material.io/components/dialogs',
            'https://github.com/material-components/material-components-web/tree/master/packages/mdc-dialog',
        ],
        'componentsProps' => [
            'mbc::dialog' => [
                ['children', 'string | html', null, 'Required. The content of the dialog.'],
                ['title', 'string', null, 'The title text displayed at the top of the dialog.'],
                ['open', 'bool', 'false', 'If true, the dialog will be open by default.'],
                ['fullscreen', 'bool', 'false', 'If true, the dialog will be displayed in fullscreen mode.'],
                ['scrollable', 'bool', 'false', 'If true, the dialog content will be scrollable.'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>{{ $desc }}</x-mbc::typography>

    <x-mbc::typography>
        Dialogs appear in front of app content to provide critical information or ask for a decision. They remain on screen until confirmed, dismissed, or a required action has been taken.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::button label="Open Dialog" onclick="document.getElementById('basic-dialog').MDCDialog.open()" />
        
        <x-mbc::dialog id="basic-dialog">
            <x-mbc::typography>
                This is a simple dialog with basic content.
            </x-mbc::typography>
            
            @slot('actions')
                <x-mbc::button label="Cancel" variant="text" data-mdc-dialog-action="close" />
                <x-mbc::button label="OK" variant="text" data-mdc-dialog-action="accept" />
            @endslot
        </x-mbc::dialog>

        @slot('codeSummary')
            @include('pages.components.dialog._codes.description-summary')
        @endslot
    </x-component-preview>
@endsection

@section('content')
    @include('pages.components.dialog._sections.basic')
    @include('pages.components.dialog._sections.title')
    @include('pages.components.dialog._sections.scrollable')
    @include('pages.components.dialog._sections.fullscreen')
    @include('pages.components.dialog._sections.actions')
@endsection
