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
		<titulo>Javascript</titulo>
		<topicos>
			<topico>Introdução</topico>
			<topico>Intermediário</topico>
			<topico>Avançado</topico>
		</topicos>
	</apostila>
</apostilas>
XML;

// $apostilas = new SimpleXmlElement($xml);

// $apostilas = new SimpleXmlElement('../apostilas.xml',null,true);

$apostilas = simplexml_load_file('../apostilas.xml');

echo '<pre>';
print_r($apostilas);