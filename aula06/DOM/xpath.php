<?php 

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

$xpath = new DOMXPath ($dom);

echo "<pre>";

$apostilas = $xpath->query('/apostilas/apostila');

print_r($apostilas);

echo "<hr>";

$apostilas = $xpath->query('/apostilas/apostila[@versao=1.0]');

print_r($apostilas);

echo "<hr>";

$apostilas = $xpath->query('/apostilas/apostila[@versao>=0.7]');

print_r($apostilas);

echo "<hr>";

$apostilas = $xpath->query('/apostilas/apostila[titulo=Java]');

print_r($apostilas);