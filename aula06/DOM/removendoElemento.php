<?php 

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

// Localizando elemento
$titulos = $dom->getElementsByTagName('titulo');

// Removendo elemento
$titulos->item(0)->parentNode->removeChild($titulos->item(0));

// Salvo meu arquivo xml
$dom->save('../apostilas.xml');

// Altero o tipo da visualização
header('Content-type: text/xml');

// exibo o xml
echo $dom->saveXML();