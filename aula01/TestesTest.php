<?php

//TestesTeste.php
use PHPUnit\Framework\TestCase;

class TestesTest extends TestCase
{
	//
	public function testSame(){
	$soma = 2+2;

	$this->assertSame(4,$soma);
	}

	public function testTrue(){
		$verdadeiro = true;

		$this->assertTrue($verdadeiro);

	}
	public function testFalse(){
		$falso = false;

		$this->assertFalse($falso);

	}
	public function testCount(){
		$arr = ["a",1,true];

		$this->assertCount(3,$arr);
	}
	public function testEmpty(){
		$vazio = null;
		$this->assertEmpty($vazio);
	}
}