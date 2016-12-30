<?php

$servername = "localhost:8889";
$username = "root";
$password = "root";

// Creo connessione col DB
$conn = new mysqli($servername, $username, $password);

// Controllo connessione
if ($conn->connect_error) {
    die("Connessione fallita " . $conn->connect_error);
}

//Questa funzione riceve una query e la esegue
//Restituisce un valore booleano se true la query e' avvenuta con successo
public function query($query) {

  
}
 ?>
