<x-mbc::typography>
    <code>List</code> component is a wrapper component that contains <code>ListItem</code> and
    <code>ListDivider</code> components.
</x-mbc::typography>

<x-mbc::typography>
    The basic structure of a list is as follows:
</x-mbc::typography>

<x-component-preview>
    <x-mbc::list>
        <x-mbc::list-item>
            Item 1
        </x-mbc::list-item>

        <x-mbc::list-item>
            Item 2
        </x-mbc::list-item>

        <x-mbc::list-item>
            Item 3
        </x-mbc::list-item>
    </x-mbc::list>

    @slot('code-summary')
        {{-- prettier-ignore-start --}}
&lt;x-mbc::list>
    &lt;x-mbc::list-item>
        Item 1
    &lt;/x-mbc::list-item>

    // Other list items
    // ....
&lt;/x-mbc::list>
{{-- prettier-ignore-end --}}
    @endslot

    @slot('code')
        {{-- prettier-ignore-start --}}
&lt;x-mbc::list>
    &lt;x-mbc::list-item>
        Item 1
    &lt;/x-mbc::list-item>

    &lt;x-mbc::list-item>
        Item 2
    &lt;/x-mbc::list-item>

    &lt;x-mbc::list-item>
        Item 3
    &lt;/x-mbc::list-item>
&lt;/x-mbc::list>
{{-- prettier-ignore-end --}}
    @endslot
</x-component-preview>
