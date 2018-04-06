<?php
echo "<pre>";
$cpf = '111.222.333-44';
$regex = '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/';
$retorno = preg_match($regex,$cpf);