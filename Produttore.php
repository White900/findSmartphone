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

    
    //-----------------	METODI GET E SET
    
    public function getNomeProduttore() {
	    
	    return $this->nomeProduttore;
    }
    
    public function getUrlProduttore() {
	    
		return $this->urlPaginaProduttore;
	    
    }
    
    public function getListaProdotti() {
	    
	    return $this->listaProdotti;
    }
    
    public function setListaProdotti($lista) {
	    
	    if (isset($lista)) {
		    
		    $this->listaProdotti = $lista;
	    }
    }
    
    public function __toString() {
	    
	    return "Produttore: " . $this->nomeProduttore . "Url Pagina: " . $this->urlPaginaProduttore;
    }
}

?>