<?php 

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

// Localizando elemento
$apostilas = $dom->getElementsByTagName('apostila');

// Alterando Atributo existente
$apostilas->item(0)->setAttribute('versao','2.0');

//Adicionando Atributo novo
$apostilas->item(0)->setAttribute('ano','2018');

// Salvo meu arquivo xml
$dom->save('../apostilas.xml');

// Altero o tipo da visualização
header('Content-type: text/xml');

// exibo o xml
echo $dom->saveXML();

