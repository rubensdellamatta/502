<?php 

$pessoas = [
	[
		'nome' => 'Heath Ledger',
		'data_nasc' => '19/05/1956',
	],
	[
		'nome' => 'Alfie Allen',
		'data_nasc' => '10/07/1993',
	],
	[
		'nome' => 'Taylor Kinney',
		'data_nasc' => '04/09/1979',
	],
	[
		'nome' => 'Audrey Hepburn',
		'data_nasc' => '13/07/1972',
	],
];

//http://dontpad.com/arr
// Dado um determinado array, converta-o para XML e exporte o mesmo.

$xml = new SimpleXmlElement('<?xml version="1.0" encoding="UTF-8"?><pessoas></pessoas>');

for($i = 0; $i < count($pessoas); $i++){
	$item = $xml->addChild('pessoa');
	$item->addChild('nome',$pessoas[$i]['nome']);
	$item->addChild('data_nasc',$pessoas[$i]['data_nasc']);
}

$xml->saveXML('pessoas3.xml');

header('Content-type: text/xml');

echo $xml->asXML();

