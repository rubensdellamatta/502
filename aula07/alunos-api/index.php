<?php 
require 'alunos.php';
$alunos = new Alunos();
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
	case 'GET':
		$id = isset($_GET['id']) ? $_GET['id'] : null;
		
		if ($id) {
			$result = $alunos->find($id);
		} else {
			$result = $alunos->all();	
		}
		if ($result) 
		{
			header('HTTP/1.1 200');
			header('Content-type:application/json; charset=UTF-8');
			echo json_encode([
					"status" => "ok",
					"data"   => $result,
					"message"=> ""
				]);
		} else 
		{
			header('HTTP/1.1 200'); // 204 No Content
			header('Content-type:application/json; charset=UTF-8');
			echo json_encode([
					"status" => "erro",
					"data"   => "",
					"message"=> "DAdos Não Encontrado"
				]);
		}
		
		break;
	case 'POST':
		$dados = file_get_contents("php://input");
		$dados = json_decode($dados,true);
		$result = $alunos->insert($dados);
		if ($result) {
			header('HTTP/1.1 201');
			header('Content-type:application/json; charset=UTF-8');
			echo json_encode([
					"status" => "ok",
					"data"   => "",
					"message"=> "Inserido Com Sucesso"
				]);
		} else {
			header('HTTP/1.1 400');
			header('Content-type:application/json; charset=UTF-8');
			echo json_encode([
					"status" => "erro",
					"data"   => "",
					"message"=> ""
				]);
		}
		break;
	case 'PUT':
		$dados = file_get_contents("php://input");
		$dados = json_decode($dados,true);
		$result = $alunos->update($dados);
		if ($result) {
			header('HTTP/1.1 201');
			header('Content-type:application/json; charset=UTF-8');
			echo json_encode([
					"status" => "ok",
					"data"   => "",
					"message"=> "Inserido Com Sucesso"
				]);
		} else {
			header('HTTP/1.1 400');
			header('Content-type:application/json; charset=UTF-8');
			echo json_encode([
					"status" => "erro",
					"data"   => "",
					"message"=> ""
				]);
		}
		break;
	case 'DELETE':
		$dados = file_get_contents("php://input");
		$dados = json_decode($dados,true);
		$result = $alunos->delete($dados);
		if ($result) {
			header('HTTP/1.1 201');
			header('Content-type:application/json; charset=UTF-8');
			echo json_encode([
					"status" => "ok",
					"data"   => "",
					"message"=> "Deletado Com Sucesso"
				]);
		} else {
			header('HTTP/1.1 400');
			header('Content-type:application/json; charset=UTF-8');
			echo json_encode([
					"status" => "erro",
					"data"   => "",
					"message"=> ""
				]);
		}
		break;
	default:
		header('HTTP/1.1 404');
		break;
}