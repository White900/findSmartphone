<?php 

class Prodotto {
	
	private $nomeProdotto = "";
	private $urlPaginaProdotto = "";
	private $urlImgProdotto = "";
	//TODO inserire variabili per contenere le caratteristiche del prodotto
	
	//Metodo costruttore di Produttore
	public function __construct($nomeProdotto, $urlPaginaProdotto, $urlImgProdotto) { 
		
		$this->nomeProdotto = $nomeProdotto;
		$this->urlPaginaProdotto = $urlPaginaProdotto;
		$this->urlImgProdotto = $urlImgProdotto;
	}
	
	public function __set($variable, $value) {
	
        //echo 'Setto ' . $variable . ' a ' . $value;
        $this->$variable = $value;
    }

    public function __destruct() {
	
      //echo 'La classe ' . __CLASS__ . " e' stata distrutta";
    }
}

?>