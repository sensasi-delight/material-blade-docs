<?php $data = array_map(fn ($item) => ([
    '<code>' . $item[0] . '</code>',
    '<code>' . $item[1] . '</code>',
    '<code>' . $item[2] . '</code>',
    $item[3]
]), $data) ?>

<section>
    <x-h2>
        Properties
    </x-h2>

    <x-mbc::data-table class="fullwidth" :header="[
        'Name',
        'Type',
        'Default',
        'Description'
        ]" :data="$data" />
</section>