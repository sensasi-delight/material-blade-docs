@php
$title = 'Lists'
@endphp

@extends('layouts.docs')

@section('title', $title)


@section('main')
<section style="display: flex; flex-direction: column; gap: 32px">
    <div>
        <x-h1>
            {{ $title }}
        </x-h1>

        <x-mbc::typography variant="h6" element="p">
            Lists are continuous, vertical indexes of text or images.
        </x-mbc::typography>

        <x-mbc::typography>
            <code>List</code> is <a href="https://www.php.net/manual/en/reserved.keywords.php">reserved keyword in PHP</a>, so we use <code>MbcList</code> instead.
        </x-mbc::typography>
    </div>

    <section>
        <x-h2>
            Variants
        </x-h2>

        <section>
            <x-h3>
                Single-line (default)
            </x-h3>

            <x-code-preview>
                <x-mbc::mbc-list wrapper>
                    <x-mbc::mbc-list>
                        Item 1
                    </x-mbc::mbc-list>

                    <x-mbc::mbc-list icon="favorite">
                        Item 2
                    </x-mbc::mbc-list>

                    <x-mbc::mbc-list icon="inbox">
                        Item 3
                    </x-mbc::mbc-list>
                </x-mbc::mbc-list>

                <x-slot:code>
&lt;x-mbc::mbc-list wrapper>
    &lt;x-mbc::mbc-list>
    Item 1
    &lt;/x-mbc::mbc-list>

    &lt;x-mbc::mbc-list icon="favorite">
    Item 2
    &lt;/x-mbc::mbc-list>

    &lt;x-mbc::mbc-list icon="inbox">
    Item 3
    &lt;/x-mbc::mbc-list>
&lt;/x-mbc::mbc-list>
                </x-slot:code>
            </x-code-preview>
        </section>

    </section>

    <section>
        <x-h2>
            Properties
        </x-h2>

        <?php
        $header = [
            'Name',
            'Type',
            'Description'
        ];

        $data = [
            ['wrapper', 'bool', 'aswd']
        ];
        ?>

        <x-mbc::data-table :header="$header" :data="$data" />
    </section>
</section>
@endsection