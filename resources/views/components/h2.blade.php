<?php
$id = str_replace(' ', '-', strtolower(trim($slot)))
?>
<x-mbc::typography variant="h4" element="h2" :id="$id">{{ $slot }}</x-mbc::typography>