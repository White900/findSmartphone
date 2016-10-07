<?php

include_once ('Produttore.php');

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
	
	echo("Marche************** ");
	print_r($matches);
	
	$arrayProduttori = array();
	
	foreach($matches[0] as $results) {
	
		echo strip_tags($results . " ");
		
		$produttore = new Produttore(strip_tags($results), "www", array());
		
		$arrayProduttori[] = $produttore;
	}
	
	$pageModelli = curlGet('http://www.gsmarena.com/apple-phones-48.php');
	echo $pageModelli;
	preg_match_all('/<a href=.+\.php>.+<br>/', $pageModelli, $matchesModelli);
	
	print_r($matchesModelli);
	
	foreach($matchesModelli[0] as $results) {
	
		echo strip_tags($results . " ");
	}
	
	print_r($arrayProduttori);

?>