<?php
$id = str_replace(' ', '-', strtolower(trim($slot)))
?>

<x-mbc::typography variant="h2" element="h1" :id="$id">{{ $slot }}</x-mbc::typography>