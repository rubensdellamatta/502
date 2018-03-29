<?php 

function cronometro(){
	return microtime(true);
}

$start = cronometro();

$a = [];
for ($i=0; $i < 1000000; $i++) { 
	$a[] = pow($i,10);
}

$end = cronometro();

echo "<pre>";
echo "Gastou = " . ($end - $start) . " segundos";