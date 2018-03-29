<?php 
// Pedido.php
require_once '../Estoque/Estoque.php';
class Pedido
{
	private $item;
	private $qtd;
	private $finalizado = false;
	public function __construct(string $item,int $qtd)
	{
		$this->item = $item;
		$this->qtd  = $qtd;
	}
	public function fechar(Estoque $estoque)
	{
		if ($estoque->get($this->item) >= $this->qtd) 
		{
			$this->finalizado = true;
			$estoque->remove($this->item,$this->qtd);
		}
	}
	public function isFinalizado()
	{
		return $this->finalizado;
	}
}