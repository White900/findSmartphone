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
	private $display = "";
	private $camera = "";
	private $ram = "";
	private $batteria = "";
	private $speedData = "";
	private $lte = "";
	private $chipset = "";
	private $chip = "";
	private $sensori = "";

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
		public function getUrlImgProdotto() {

			if (isset($this->urlImgProdotto)) {

				return $this->urlImgProdotto;
			}
		}

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

		else {

			$this->dataRilascioProdotto = "Non disponibile";
		}
	}

	public function getDataRilascioProdotto() {

		if (isset($this->dataRilascioProdotto)) {

			return $this->dataRilascioProdotto;
		}
	}

	public function setSpessoreProdotto($spessore) {

		if (isset($spessore) && strlen($spessore) > 0) {

			$spessore = str_replace("mm thickness", "", $spessore);
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

			$peso = str_replace("g", "", $peso);
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

		if (isset($versione)) {

			$this->versioneSO = $versione;
		}

		else {

			$this->versioneSO = "Non disponibile";
		}
	}

	public function getVersioneSO() {

		if(isset($this->versioneSO)) {

			return $this->versioneSO;
		}
	}

	public function setMemoria($memoria) {

		if (isset($memoria)) {

			$this->memoria = $memoria;
		}

		else {

			$this->memoria = "Non disponibile";
		}
	}

	public function getMemoria() {

		if(isset($this->memoria)) {

			return $this->memoria;
		}
	}

	public function setDisplay($display) {

		if (isset($display))
			$this->display = $display;

		else {

			$this->display = "Non disponibile";
		}
	}

	public function getDisplay() {

		if (isset($this->display))
			return $this->display;
	}

	public function setCamera($camera) {

		if(isset($camera)) {

			$camera = str_replace("MP", "", $camera);
			$this->camera = $camera;
		}

		else {

			$this->camera = "Non disponibile";
		}
	}

	public function getCamera() {

		if(isset($this->camera)) {

			return $this->camera;
		}
	}

	public function setRam($ram) {

		if(isset($ram)) {

			$ram = str_replace("GB", "", $ram);
			$this->ram = $ram;
		}

		else {

			$this->ram = "Non disponibile";
		}
	}

	public function getRam() {

		if(isset($this->ram)) {

			return $this->ram;
		}
	}

	public function setBatteria($batteria) {

		if(isset($batteria)) {

			$batteria = str_replace("mAh", "", $batteria);
			$this->batteria = $batteria;
		}

		else {

			$this->batteria = "Non disponibile";
		}
	}

	public function getBatteria() {

		if(isset($this->batteria)) {

			return $this->batteria;
		}
	}

	public function setSpeedData($speed) {

		if (isset($speed)) {

			$this->speedData = $speed;
		}

		else {

			$this->speedData = "Non disponibile";
		}
	}

	public function getSpeedData() {

		if (isset($this->speedData)) {

			return $this->speedData;
		}
	}

	public function getUrlPaginaProdotto() {

		return $this->urlPaginaProdotto;
	}

	public function getLTE() {

		if (isset($this->lte)) {

			return $this->lte;
		}
	}

	public function setLTE($lte) {

		if (isset($lte)) {

			$this->lte = $lte;
		}

		else {

			$this->lte = "Non disponibile";
		}
	}

	public function getChipset() {

		if (isset($this->chipset)) {

			return $this->chipset;
		}
	}

	public function setChipset($chipset) {

		if (isset($chipset)) {

			$this->chipset = $chipset;
		}

		else {

			$this->chipset = "Non disponibile";
		}
	}

	public function getChip() {

		if (isset($this->chip)) {

			return $this->chip;
		}
	}

	public function setChip($chip) {

		if (isset($chip) && (strlen($chip) > 0)) {

			$this->chip = $chip;
		}

		else {

			$this->chip = "Non disponibile";
		}
	}

	public function setSensori($sensori) {

		if (isset($sensori)) {

			$this->sensori = $sensori;
		}

		else {

			$this->sensori = "Non disponibile";
		}
	}

	public function getSensori() {

		if (isset($this->sensori)) {

			return $this->sensori;
		}
	}

}

?>
