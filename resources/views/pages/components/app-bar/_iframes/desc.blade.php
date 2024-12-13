<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>App Bar Basic Preview</title>

    <x-mbc::_assets />
</head>

<body>
    <x-mbc::app-bar>
        @slot('start')
            <x-mbc::IconButton
                icon="menu"
                color="inherit"
                aria-label="Open navigation menu"
            />

            <span class="mdc-top-app-bar__title">Page title</span>
        @endslot

        @slot('end')
            <x-mbc::icon-button
                icon="favorite"
                color="inherit"
                aria-label="Favorite"
            />
            <x-mbc::icon-button
                icon="search"
                color="inherit"
                aria-label="Search"
            />
            <x-mbc::icon-button
                icon="more_vert"
                color="inherit"
                aria-label="Options"
            />
        @endslot
    </x-mbc::app-bar>

    <x-mbc::typography>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident suscipit culpa quos, quidem sunt non, cum
        laborum sequi explicabo expedita dolor odio blanditiis, ducimus commodi. Consectetur esse quidem officia est.
    </x-mbc::typography>

    <x-mbc::typography>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident suscipit culpa quos, quidem sunt non, cum
        laborum sequi explicabo expedita dolor odio blanditiis, ducimus commodi. Consectetur esse quidem officia est.
    </x-mbc::typography>

    <x-mbc::typography>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident suscipit culpa quos, quidem sunt non, cum
        laborum sequi explicabo expedita dolor odio blanditiis, ducimus commodi. Consectetur esse quidem officia est.
    </x-mbc::typography>

    <x-mbc::typography>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident suscipit culpa quos, quidem sunt non, cum
        laborum sequi explicabo expedita dolor odio blanditiis, ducimus commodi. Consectetur esse quidem officia est.
    </x-mbc::typography>

</body>

</html>

