<?php 

$xml = <<< 'XML'
<?xml version="1.0" encoding="UTF-8"?>
<apostilas>
	<apostila versao="1.0">
		<titulo>PHP</titulo>
		<topicos>
			<topico>Introdução</topico>
			<topico>Intermediário</topico>
			<topico>Avançado</topico>
		</topicos>
	</apostila>
	<apostila versao="1.0">
		<titulo>Java</titulo>
		<topicos>
			<topico>Introdução</topico>
			<topico>Intermediário</topico>
			<topico>Avançado</topico>
		</topicos>
	</apostila>
	<apostila versao="2.0">
		<titulo>Java</titulo>
		<topicos>
			<topico>Introdução</topico>
			<topico>Intermediário</topico>
			<topico>Avançado</topico>
		</topicos>
	</apostila>
</apostilas>
XML;

echo "<pre>";

$dom = new DOMDocument();
$dom->loadXML($xml);

print_r($dom);

echo "<hr>";

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

print_r($dom);