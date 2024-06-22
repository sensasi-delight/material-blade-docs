<?php
$id = str_replace(' ', '-', strtolower(trim($slot)))
?>

<x-mbc::typography variant="h6" element="h3" :id="$id">{{ $slot }}</x-mbc::typography>