<?php

$app->get('/', function(){
	return \Lucas\Controller\Action\Say::hello();
});
