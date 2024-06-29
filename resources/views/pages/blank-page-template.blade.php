@php
    $pageData = [
        'title' => 'Blank Page Template',
        'headings' => ['Subheading 1', 'Subheading 2', 'Subheading 3', 'Subheading 4', 'Subheading 5'],
        'referenceLinks' => ['#link1', '#link2', '#link3', '#link4'],
        'componentsProps' => [
            'component 1' => [
                ['prop1', 'string', 'default', 'Description 1'],
                ['prop2', 'string', 'default', 'Description 2'],
                ['prop3', 'string', 'default', 'Description 3'],
                ['prop4', 'string', 'default', 'Description 4'],
                ['prop5', 'string', 'default', 'Description 5'],
            ],
            'component 2' => [
                ['prop1', 'string', 'default', 'Description 1'],
                ['prop2', 'string', 'default', 'Description 2'],
                ['prop3', 'string', 'default', 'Description 3'],
                ['prop4', 'string', 'default', 'Description 4'],
                ['prop5', 'string', 'default', 'Description 5'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>
        This is a blank page template.
    </x-mbc::typography>
@endsection

@section('content')
    <section>
        <x-h2>
            Subheading
        </x-h2>

        <x-mbc::typography>
            This is a subheading body.
        </x-mbc::typography>
    </section>
@endsection

