<?php 

class Produttore {
	
	private $nomeProduttore = "";
	private $urlPaginaProduttore = "";
	private $listaProdotti = array();
	
	//Metodo costruttore di Produttore
	public function __construct($nomeProduttore, $urlPaginaProduttore, $listaProdotti) { 
		
		$this->$nomeProduttore = $nomeProduttore;
		$this->$urlPaginaProduttore = $urlPaginaProduttore;
		$this->$listaProdotti = $listaProdotti;
	}
	
	public function __set($variable, $value) {
	
        echo 'Setto ' . $variable . ' a ' . $value;
        $this->$variable = $value;
    }

    public function __get($variable) {
    
        if(isset($this->$variable)){
            return $this->data[$variable];
            
        }
        
        else{
            die('Variabile sconosciuta');
        }
    }
}

?>