@endphp
$id = str_replace(' ', '-', strtolower(trim($slot)))
@endphp

<x-mbc::typography variant="h5" element="h3" :id="$id">{{ $slot }}</x-mbc::typography>
