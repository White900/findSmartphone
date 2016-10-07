<?php

include_once ('Produttore.php');
include_once('Prodotto.php');

//Non giudicare un uomo prima di aver camminato 2 miglia nei suoi mocassini

	function curlGet($url) {
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_URL, $url);
		$results = curl_exec($ch);
		curl_close($ch);
		
		return $results;
	}
	
	function scrapeIn($item, $start) {
	
		if (($startPos = stripos($item, $start)) === false) {
			
			return false;
		}
		
		else {
			
			$substrStart = $startPos + strlen($start);
			
			return substr($item, $substrStart, lunghezzaParola($item, $substrStart));
		}
		
	}
	
	
	function lunghezzaParola($item, $puntoInizio) {
		
		$strTemp = "";
		$strFinale = "";
		$isCarattereHTML = false;
		
		$array = array();
		
		for($i = 0; $i <= strlen($item); $i++ ) { 
			
			$strTemp = substr($item, $puntoInizio + $i, 1);
			
			if ($strTemp == "<") {
				
				for ($y = $puntoInizio + $i; $y < ($puntoInizio + $i + 15); $y++) {
					
					$temp1 = substr($item, $y, 1);
					echo($temp1);
					
					if ($temp1 == ">") {
						
						$isCarattereHTML = true;
						
						break;
					}
				}
			}
			
			if ($isCarattereHTML == false) {
			
				$strFinale .= $strTemp;
			}
				
			else {
				echo($strFinale);
				array_push($array, $strFinale);
				
				$strFinale = "";
			}
		}
		
		return strlen($array);
	}
	
	header('Content-Type: text/plain');
	
	$page = curlGet('http://www.gsmarena.com/makers.php3');
	
	//$analyticsId = scrapeIn($page, '<a href="acer-phones-59.php">Acer<br>');
	//echo $analyticsId;
	
	preg_match_all('/<a href=.+\.php>.+<br>/', $page, $matches);
	
	echo("Produttori************** ");
	print_r($matches);
	
	$arrayProduttori = array();
	
	foreach($matches[0] as $results) {

		preg_match('/href=([^"]*)\.php/', $results, $arrayLinkProduttori);
		
		$produttore = new Produttore(strip_tags($results), $arrayLinkProduttori[1] . ".php", array());
		
		$arrayProduttori[] = $produttore;
	}
	
	print_r($arrayProduttori);
	
	echo("Prodotti************** ");
	$pageModelli = curlGet('http://www.gsmarena.com/apple-phones-48.php');
	$arrayProdotti = array();
	
	preg_match_all('/<a href="?([A-Za-z0-9\_\-\.]+)\.php"?><img src="?([A-Za-z0-9\_\.\:\/\-]+)\.jpg"? title="?([A-Za-z0-9\ \.\,\;&\-]+)"?><strong><span>([A-Za-z0-9\ \-\_\.\,\:\;]+)<\/span><\/strong><\/a><\/li>/', $pageModelli, $matchesModelli);
	
	foreach($matchesModelli[0] as $results) {
		
		preg_match('/href="?([A-Za-z0-9\-\_\:\;]+)\.php"?>/', $results, $arrayLinkProdotti);
		preg_match('/src="?([A-Za-z0-9\-\_\:\;\/\.]+)\.jpg"?/', $results, $arrayLinkImgProdotti);
		
		$prodotto = new Prodotto(strip_tags($results), $arrayLinkProdotti[1] . ".php", $arrayLinkImgProdotti[1] . ".php");
		
		$arrayProdotti[] = $prodotto;
	}
	
	print_r($arrayProdotti);

?>