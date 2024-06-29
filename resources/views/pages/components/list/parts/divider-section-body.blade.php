<x-mbc::typography>
    A divider is a thin line that groups content in lists and layouts.
</x-mbc::typography>

<x-component-preview>
    <x-mbc::list>
        <x-mbc::list-item>
            Item 1
        </x-mbc::list-item>

        <x-mbc::list-divider />

        <x-mbc::list-item>
            Item 2
        </x-mbc::list-item>
    </x-mbc::list>

    {{-- prettier-ignore-start --}}
    <x-slot:code-summary>&lt;x-mbc::list>
    // list items
    // ....

    &lt;x-mbc::list-divider />

    // other list items
    // ....
&lt;/x-mbc::list></x-slot:code-summary>

    <x-slot:code>&lt;x-mbc::list>
    &lt;x-mbc::list-item>
        Item 1
    &lt;/x-mbc::list-item>

    &lt;x-mbc::list-divider />

    &lt;x-mbc::list-item>
        Item 2
    &lt;/x-mbc::list-item>
&lt;/x-mbc::list></x-slot:code>
    {{-- prettier-ignore-end --}}
</x-component-preview>
