<?php 
// TestesTest.php
use PHPUnit\Framework\TestCase;
class TestesTest extends TestCase
{
	// Testa se é idêntico
	public function testSame(){
		$soma =  2+2;
		$this->assertSame(4,$soma);
	}
	// Testa se é verdadeiro(somente boolean)
	public function testTrue(){
		$verdadeiro = true;
		$this->assertTrue($verdadeiro);
	}
	// Testa se é falso
	public function testFalse(){
		$falso = false;
		$this->assertFalse($falso);
	}
	// Testa se Count é igual
	public function testCount(){
		$arr = ["a",1,true];
		$count = count($arr);
		$this->assertSame(3,$count);
		$this->assertSame("a",$arr[0]);
		$this->assertCount(3,$arr);
	}
	// Testa se é vazio
	public function testEmpty(){
		// 0,"",false,[],null
		$vazio = "";
		$this->assertEmpty($vazio);
	}
	// Testa se é nulo
	public function testNull(){
		$vazio = null;
		$this->assertNull($vazio);
	}
	// Testa se é igual mas não idêntico
	public function testEquals(){
		$a = "1";
		$b = 1;
		$this->assertEquals($a,$b);
	}
}