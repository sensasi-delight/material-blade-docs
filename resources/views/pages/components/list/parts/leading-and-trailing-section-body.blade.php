<x-mbc::typography>
    A list items can have leading and trailing icons.
</x-mbc::typography>

<x-component-preview>
    <x-mbc::list>
        <x-mbc::list-item startIcon="star">
            Leading Icon
        </x-mbc::list-item>

        <x-mbc::list-item endIcon="bluetooth">
            Trailing Icon
        </x-mbc::list-item>

        <x-mbc::list-item
            startIcon="star"
            endIcon="bluetooth"
        >
            Leading and Trailing Icon
        </x-mbc::list-item>
    </x-mbc::list>

    @slot('code-summary')
        {{-- prettier-ignore-start --}}
&lt;x-mbc::list>
    &lt;x-mbc::list-item startIcon="star">
        Leading Icon
    &lt;/x-mbc::list-item>

    &lt;x-mbc::list-item endIcon="bluetooth">
        Trailing Icon
    &lt;/x-mbc::list-item>

    &lt;x-mbc::list-item
        startIcon="star"
        endIcon="bluetooth"
    >
        Both
    &lt;/x-mbc::list-item>
&lt;/x-mbc::list>
{{-- prettier-ignore-end --}}
    @endslot
</x-component-preview>

<x-mbc::typography>
    The <code>startIcon</code> and <code>endIcon</code> props also accept a url or an image as a value.
</x-mbc::typography>

<x-component-preview>
    <x-mbc::list>
        <x-mbc::list-item startIcon="https://picsum.photos/id/1/200">
            Leading Image
        </x-mbc::list-item>

        <x-mbc::list-item endIcon="https://picsum.photos/id/2/200">
            Trailing Image
        </x-mbc::list-item>

        <x-mbc::list-item
            startIcon="https://picsum.photos/id/3/200"
            endIcon="https://picsum.photos/id/4/200"
        >
            Leading and Trailing Image
        </x-mbc::list-item>
    </x-mbc::list>

    @slot('code-summary')
        {{-- prettier-ignore-start --}}
&lt;x-mbc::list>
    &lt;x-mbc::list-item startIcon="https://picsum.photos/id/1/200">
        Leading Image
    &lt;/x-mbc::list-item>

    &lt;x-mbc::list-item endIcon="https://picsum.photos/id/2/200">
        Trailing Image
    &lt;/x-mbc::list-item>

    &lt;x-mbc::list-item
        startIcon="https://picsum.photos/id/3/200"
        endIcon="https://picsum.photos/id/4/200"
    >
        Both
    &lt;/x-mbc::list-item>
&lt;/x-mbc::list>
{{-- prettier-ignore-end --}}
    @endslot
</x-component-preview>

<x-mbc::typography>
    You can also add the <code>avatar</code> prop to the <code>List</code> component to make the leading image/icon
    circular.
</x-mbc::typography>

<x-component-preview>
    <x-mbc::list avatar>
        <x-mbc::list-item startIcon="folder">
            Avatar Icon
        </x-mbc::list-item>

        <x-mbc::list-item startIcon="https://picsum.photos/id/64/200">
            Avatar Image
        </x-mbc::list-item>
    </x-mbc::list>

    @slot('code-summary')
        {{-- prettier-ignore-start --}}
&lt;x-mbc::list avatar>
    &lt;x-mbc::list-item startIcon="folder">
        Avatar Icon
    &lt;/x-mbc::list-item>

    &lt;x-mbc::list-item startIcon="https://picsum.photos/id/64/200">
        Avatar Image
    &lt;/x-mbc::list-item>
&lt;/x-mbc::list>
{{-- prettier-ignore-end --}}
    @endslot
</x-component-preview>
