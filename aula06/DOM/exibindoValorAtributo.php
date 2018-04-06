<?php 

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

// Localizando elemento
$apostilas = $dom->getElementsByTagName('apostila');

// Exibindo valor do atributo
echo $apostilas->item(0)->getAttribute('versao');