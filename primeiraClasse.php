<?php
class carro{
	protected $marca;
	public $modelo;
	public $portas;
	public $cor;
	public $ano;
	
	/*
	 * Define a marca do carro
	 */
	public function setMarca($marca)
	{
		$this->marca = $marca;
	}
	/*
	 * Retorma a marca do carro
	 */
	public function getMarca()
	{
		return $this->marca;
	}
	
}

$i30 = new carro();
$i30->setMarca('Hyundai');
$i30->modelo = "i30";

$uno = new carro();
$uno->setMarca('Fiat');
$uno->modelo = "Uno";

var_dump($i30, $uno);
echo '<br />'.$i30->getMarca();
echo '<br />'.$uno->getMarca();


/*
$zip = new zipClass();
$zip->saveFile("arquivo.zip");

$zip = new zipClass();
$zip->compress(..);
*/