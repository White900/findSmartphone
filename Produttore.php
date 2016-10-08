<?php 

class Produttore {
	
	private $nomeProduttore = "";
	private $urlPaginaProduttore = "";
	private $listaProdotti = array();
	
	//Metodo costruttore di Produttore
	public function __construct($nomeProduttore, $urlPaginaProduttore, $listaProdotti) { 
		
		$this->nomeProduttore = $nomeProduttore;
		$this->urlPaginaProduttore = $urlPaginaProduttore;
		$this->listaProdotti = $listaProdotti;
	}
	
	public function __destruct() {
	
      //echo 'La classe ' . __CLASS__ . " e' stata distrutta";
    }

    
    public function getUrlProduttore() {
	    
		return $this->urlPaginaProduttore;
	    
    }
    
    public function __toString() {
	    
	    return "Produttore: " . $this->nomeProduttore . "Url Pagina: " . $this->urlPaginaProduttore;
    }
}

?>