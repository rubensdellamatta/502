<?php 

$apostilas = new SimpleXmlElement('../apostilas.xml',null,true);

// $apostilas->apostila[0]->attributes()->versao = '2.0';

$apostila = $apostilas->apostila[1]->attributes();
$apostila->versao = "3.0";

$apostilas->saveXML('../apostilas.xml');

header('Content-type: text/xml');

echo $apostilas->asXML();