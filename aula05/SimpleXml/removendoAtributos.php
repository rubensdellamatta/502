<?php 

$apostilas = new SimpleXmlElement('../apostilas.xml',null,true);

unset($apostilas->apostila[2]->attributes()->versao);

$apostilas->saveXML('../apostilas.xml');

header('Content-type: text/xml');

echo $apostilas->asXML();