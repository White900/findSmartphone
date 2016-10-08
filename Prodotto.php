<?php 

class Prodotto {
	
	private $nomeProduttore = "";
	private $nomeProdotto = "";
	private $urlPaginaProdotto = "";
	private $urlImgProdotto = "";
	
	private $prezzoProdotto = "";
	//TODO inserire variabili per contenere le caratteristiche del prodotto
	
	//Metodo costruttore di Produttore
	public function __construct($nomeProduttore, $nomeProdotto, $urlPaginaProdotto, $urlImgProdotto) { 
		
		$this->nomeProduttore = $nomeProduttore;
		$this->nomeProdotto = $nomeProdotto;
		$this->urlPaginaProdotto = $urlPaginaProdotto;
		$this->urlImgProdotto = $urlImgProdotto;
	}

    public function __destruct() {
	
      //echo 'La classe ' . __CLASS__ . " e' stata distrutta";
    }
    
    //METODI GET E SET
    
    public function getNomeProduttore() {
	    
	    return $this->nomeProduttore;
    }
    
    public function getNomeProdotto() {
	    
	    return $this->nomeProdotto;
    }
    
    public function setPrezzoProdotto($prezzo) {
		
		if (isset($prezzo))
			$this->prezzoProdotto = $prezzo;
	}
	
	public function getPrezzoProdotto() {
		
		return $this->prezzoProdotto;
	}
	
	public function getUrlPaginaProdotto() {
		
		return $this->urlPaginaProdotto;
	}
}

?>