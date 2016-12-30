<?php

class Database {

  //Variabili connessione
  private $db = NULL;

  function __construct() {

  }

  //Avvia connessione con il DB
  public function avviaConnessioneDB($serverName, $user, $pass, $dbName) {

    // Creo connessione col DB
    if (!($db = mysql_connect($serverName, $user, $pass))) {

      die("Non riesco a connettermi al database. ");
    }

    if (!mysql_select_db($dbName, $db)) {

      die("Non riesco ad aprite il database. ");
    }
  }

  //Questa funzione riceve una query e la esegue
  //Restituisce un valore booleano se true la query e' avvenuta con successo
  public function insertDB($query) {

    $result = NULL;
    mysql_query($query) or die ('Error updating database: '.mysql_error());

    echo "$result";
  }

  //Chiude la connessione con il DB
  public function closeDB() {

    mysql_close($db);
  }
}
?>
