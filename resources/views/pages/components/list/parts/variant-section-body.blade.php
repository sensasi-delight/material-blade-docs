<x-mbc::typography>
    The <code>List</code> component has <code>variant</code> attribute that supports two variants:
    <code>single-line</code> and <code>two-line</code>. The default variant is <code>single-line</code> as you can
    see on the example above.
</x-mbc::typography>

<x-mbc::typography>
    In order to use <code>two-line</code> variant, you need to set the variant attribute to <code>two-line</code> on
    the
    <code>List</code> component. The <code>List</code> component should have <code>ListItems</code> as its children.
    The
    <code>ListItem</code> component should have <code>primary</code> and <code>secondary</code> attributes. The
    preview of <code>two-line</code> variant is shown below.
</x-mbc::typography>

<x-component-preview>
    <x-mbc::list variant="two-line">
        <x-mbc::list-item
            primary="Item 1"
            secondary="secondary line"
        />
        <x-mbc::list-item primary="Item 2" />
        <x-mbc::list-item
            primary="Item 3"
            secondary="secondary line"
        />
    </x-mbc::list>

    {{-- prettier-ignore-start --}}
    <x-slot:code-summary>&lt;x-mbc::list variant="two-line">
    &lt;x-mbc::list-item
        primary="Item 1"
        secondary="secondary line"
    />

    // other items
&lt;/x-mbc::list></x-slot:code-summary>

<x-slot:code>&lt;x-mbc::list variant="two-line">
    &lt;x-mbc::list-item
        primary="Item 1"
        secondary="secondary line"
    />

    &lt;x-mbc::list-item primary="Item 2" />

    &lt;x-mbc::list-item
        primary="Item 3"
        secondary="secondary line"
    />
&lt;/x-mbc::list></x-slot:code>
    {{-- prettier-ignore-end --}}
</x-component-preview>
