@php
    if ($componentsProps) {
        $headings['Properties'] = array_keys($componentsProps);
    }

    if ($referenceLinks) {
        array_push($headings, 'References');
    }
@endphp

<x-mbc::drawer class="right-sidebar">
    <x-mbc::typography variant="caption" element="div" style="font-weight: 500; text-transform: uppercase;" disableGutter>
        Contents
    </x-mbc::typography>

    <x-mbc::list>
        @foreach ($headings as $key => $heading)
            @if (is_array($heading))
                <li>
                    <x-mbc::list-item href="#{{ strtolower(str_replace(' ', '-', $key)) }}" htmlTag="a"
                        :activated="$loop->first" style="font-weight: unset;">
                        {{ $key }}
                    </x-mbc::list-item>

                    <x-mbc::list class="mbc-p-0">
                        @foreach ($heading as $subHeading)
                <li>
                    <x-mbc::list-item href="#{{ strtolower(str_replace(' ', '-', $subHeading)) }}" htmlTag="a"
                        style="padding-left: 24px; font-weight: unset;">
                        {{ $subHeading }}
                    </x-mbc::list-item>
                </li>
            @endforeach

    </x-mbc::list>
    </li>
@else
    <x-mbc::list-item href="#{{ strtolower(str_replace(' ', '-', $heading)) }}" htmlTag="a" :activated="$loop->first"
        style="font-weight: unset;">
        {{ $heading }}
    </x-mbc::list-item>
    @endif
    @endforeach
    </x-mbc::list>
</x-mbc::drawer>
