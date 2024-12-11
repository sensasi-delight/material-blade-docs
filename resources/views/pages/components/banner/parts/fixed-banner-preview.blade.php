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
    <title>Fixed Banner Preview &mdash; {{ config('app.name') }}</title>

    <x-mbc::_assets />
</head>

<body>
    <x-mbc::banner
        open
        fixed
    >
        There was a problem processing a transaction on your credit card.

        @slot('actions')
            <x-mbc::button
                label="Fix it"
                variant="text"
            />
            <x-mbc::button
                label="Learn more"
                variant="text"
            />
        @endslot
    </x-mbc::banner>

    <x-mbc::typography variant="h1">Fixed Banner Preview</x-mbc::typography>

    <x-mbc::typography>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam harum, ipsum hic delectus sapiente adipisci
        nostrum
        facilis quae eligendi quod blanditiis quidem aliquam magni nisi ad vero fugit! Perspiciatis, perferendis.
    </x-mbc::typography>

    <x-mbc::typography>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam harum, ipsum hic delectus sapiente adipisci
        nostrum
        facilis quae eligendi quod blanditiis quidem aliquam magni nisi ad vero fugit! Perspiciatis, perferendis.
    </x-mbc::typography>

    <x-mbc::typography>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam harum, ipsum hic delectus sapiente adipisci
        nostrum
        facilis quae eligendi quod blanditiis quidem aliquam magni nisi ad vero fugit! Perspiciatis, perferendis.
    </x-mbc::typography>

    <x-mbc::typography>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam harum, ipsum hic delectus sapiente adipisci
        nostrum
        facilis quae eligendi quod blanditiis quidem aliquam magni nisi ad vero fugit! Perspiciatis, perferendis.
    </x-mbc::typography>
</body>

</html>
