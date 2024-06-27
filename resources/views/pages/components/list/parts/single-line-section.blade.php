<section class="level-1">
    <x-h3>
        Single-line
    </x-h3>

    <x-code-preview>
        <x-mbc::list>
            <x-mbc::list-item>
                Item 1
            </x-mbc::list-item>

            <x-mbc::list-item icon="favorite">
                Item 2
            </x-mbc::list-item>

            <x-mbc::list-item icon="inbox">
                Item 3
            </x-mbc::list-item>

            <x-mbc::list-divider />

            <x-mbc::list-item>
                Item 4
            </x-mbc::list-item>
        </x-mbc::list>

        {{-- prettier-ignore-start --}}
<x-slot:code>&lt;x-mbc::list>
    &lt;x-mbc::list-item>
        Item 1
    &lt;/x-mbc::list-item>

    &lt;x-mbc::list-item icon="favorite">
        Item 2
    &lt;/x-mbc::list-item>

    &lt;x-mbc::list-item icon="inbox">
        Item 3
    &lt;/x-mbc::list-item>

    &lt;x-mbc::list-divider />

    &lt;x-mbc::list-item>
        Item 4
    &lt;/x-mbc::list-item>
&lt;/x-mbc::list></x-slot:code>
        {{-- prettier-ignore-end --}}
    </x-code-preview>
</section>
