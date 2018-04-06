<?php 

//Xpath.php

$xml = simplexml_load_file('cursos.xml');

$curso501 = $xml->xpath("/cursos/curso[@codigo=501]");

echo "<pre>";

print_r($curso501);

echo "<hr>";

$versao2 = $xml->xpath("/cursos/curso[@versao>=2]");

print_r($versao2);

echo "<hr>";

$cursos = $xml->xpath("/cursos/curso/nome");

print_r($cursos);