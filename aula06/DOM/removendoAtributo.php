<?php

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

// Localizando o elemento apostila
$apostilas = $dom->getElementsByTagName('apostila');

// Removendo atributo
$apostilas->item(0)->removeAttribute('versao');

// Salvo meu arquivo xml
$dom->save('../apostilas.xml');

// Altero o tipo da visualização
header('Content-type: text/xml');

// exibo o xml
echo $dom->saveXML();