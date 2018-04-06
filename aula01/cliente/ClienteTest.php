<?php 
require_once 'Cliente.php';
use PHPUnit\Framework\TestCase;
class ClienteTest extends TestCase
{
	public function testCriacaoCliente(){
		$cliente = new Cliente('Lucas',24,'lucas@lucas.com');
		$this->assertSame('Lucas',$cliente->getNome());
		$this->assertSame(24,$cliente->getIdade());
		$this->assertSame('lucas@lucas.com',$cliente->getEmail());
	}
}