<?php
class Cadastro {
	private $hinicial;
	private $hfinal;
    public function __construct($hinicial,$hfinal){
    	$this->hinicial=$hinicial;
    	$this->hfinal=$hfinal;
    }
	public function getHinicial(){
     return $this->hinicial;

	}
	public function getHfinal(){
     return $this->hfinal;
     
	}
	public function convertH(){
		$si=strtotime("2019-05-03".$this->getHinicial());
		$sf=strtotime("2019-05-03".$this->getHfinal());
		$total=$sf-$si;
		$horas=floor($total/3600);
		$minutos = floor(($total - ($horas * 3600)) / 60);
		echo "<br>Horario inicial ".$this->getHinicial()." Horario Final ".$this->getHfinal()." Intervalo de ".$horas.":".$minutos;
	}
	
}


?>