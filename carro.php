<?php

class carro
{
	protected $marca;
	protected $modelo;
	protected $ano;

	/*
	 * Método construtor que inicializa os atributos da classe
	*/
	public function __construct($marca, $modelo, $ano)
	{
		$this->marca = $marca;
		$this->modelo = $modelo;
		$this->ano = $ano;
	}

	/*
	 * Imprime um resumo sobre o carro
	*/
	public function getDadosCarro()
	{
		$dados = "<b>Carro:</b> {$this->modelo} ({$this->ano}) - {$this->marca}";
		return $dados;
	}
}

$i30 = new carro("Hyundai", "i30", "2013");
echo $i30->getDadosCarro();