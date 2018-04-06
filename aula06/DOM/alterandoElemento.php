<?php 

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

echo "<pre>";

// Localizando o Elemento
$titulo = $dom->getElementsByTagName('titulo');

print_r($titulo);

echo "<hr>";

// Alterando o valor
$titulo->item(0)->nodeValue = "PHP Enterprise";

// Salvando o arquivo
$dom->save('../apostilas.xml');

// Exibindo o resultado na tela
print_r($dom->saveXML());