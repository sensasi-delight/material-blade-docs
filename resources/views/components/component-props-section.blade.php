@php
    $componentsProps = collect($componentsProps)->map(function ($props) {
        return collect($props)
            ->sortBy([['0', 'asc']])
            ->map(function ($prop) {
                return [
                    '<code>' . $prop[0] . '</code>',
                    '<code>' . $prop[1] . '</code>',
                    '<code>' . $prop[2] . '</code>',
                    $prop[3],
                ];
            })
            ->toArray();
    });
@endphp

<section>
    <x-h2>
        Properties
    </x-h2>

    @foreach ($componentsProps as $componentName => $props)
        <section>
            <x-h3 style="font-family: monospace;">
                {{ $componentName }}
            </x-h3>

            <x-mbc::data-table class="fullwidth" :header="['Name', 'Type', 'Default', 'Description']" :data="$props" />
        </section>
    @endforeach
</section>
