<?php 

class Prodotto {
	
	private $nomeProduttore = "";
	private $nomeProdotto = "";
	private $urlPaginaProdotto = "";
	private $urlImgProdotto = "";
	
	private $dataRilascioProdotto = "";
	private $prezzoProdotto = "";
	private $spessoreProdotto = "";
	private $pesoProdotto = "";
	private $versioneSO = "";
	private $memoria = "";
	//TODO inserire i controlli nei vai metodi get and set stile a quello del prezzo
	
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
		
		if (isset($prezzo) && strlen($prezzo) > 0)
			$this->prezzoProdotto = $prezzo;
		
		else {
			
			$this->prezzoProdotto = "Non disponibile";
		}
	}
	
	public function getPrezzoProdotto() {
		
		return $this->prezzoProdotto;
	}
	
	public function setDataRilascioProdotto($data) {
		
		if (isset($data))
			$this->dataRilascioProdotto = $data;
	}
	
	public function getDataRilascioProdotto() {
		
		if (isset($this->dataRilascioProdotto)) {
			
			return $this->dataRilascioProdotto;
		}
	}
	
	public function setSpessoreProdotto($spessore) {
		
		if (isset($spessore) && strlen($spessore) > 0) {
			
			$this->spessoreProdotto = $spessore;
		}
		
		else {
		
		 	$this->spessoreProdotto = "Non disponibile";
		}
	}
	
	public function getSpessoreProdotto() {
		
		return $this->spessoreProdotto;
	}
	
	public function setPeso($peso) {
		
		if (isset($peso) && strlen($peso) > 0) {
		
			$this->peso = $peso;
		}
		
		else {
			
			$this->peso = "Non disponibile";
		}
	}
	
	public function getPeso() {
		
		return $this->peso;
	}
	
	public function setVersioneSO($versione) {
		
		$this->versioneSO = $versione;
	}
	
	public function getVersioneSO() {
		
		if(isset($this->versioneSO)) {
			
			return $this->versioneSO;
		}
	}
	
	public function setMemoria($memoria) {
		
		$this->memoria = $memoria;
	}
	
	public function getMemoria() {
		
		if(isset($this->memoria)) {
			
			return $this->memoria;
		}
	}
	
	public function getUrlPaginaProdotto() {
		
		return $this->urlPaginaProdotto;
	}
}

?>