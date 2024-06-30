<x-mbc::typography>
    Dense list reduces the height of each list item.
</x-mbc::typography>

<x-component-preview>
    <x-mbc::list dense>
        <x-mbc::list-item>
            Item 1
        </x-mbc::list-item>

        <x-mbc::list-item>
            Item 2
        </x-mbc::list-item>

        <x-mbc::list-item>
            Item 3
        </x-mbc::list-item>

        <x-mbc::list-divider />

        <x-mbc::list-item>
            Item 4
        </x-mbc::list-item>
    </x-mbc::list>

    @slot('code-summary')
        {{-- prettier-ignore-start --}}
&lt;x-mbc::list dense>
    // list items
    // ....
&lt;/x-mbc::list>
{{-- prettier-ignore-end --}}
    @endslot

    @slot('code')
        {{-- prettier-ignore-start --}}
&lt;x-mbc::list dense>
    &lt;x-mbc::list-item>
        Item 1
    &lt;/x-mbc::list-item>

    &lt;x-mbc::list-item>
        Item 2
    &lt;/x-mbc::list-item>

    &lt;x-mbc::list-item>
        Item 3
    &lt;/x-mbc::list-item>

    &lt;x-mbc::list-divider />

    &lt;x-mbc::list-item>
        Item 4
    &lt;/x-mbc::list-item>
&lt;/x-mbc::list>
{{-- prettier-ignore-end --}}
    @endslot
</x-component-preview>
