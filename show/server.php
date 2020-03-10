<?php
  // Include env.php
  include __DIR__ . '/../database.php';

  // Creo la variabile "idRoom" che prende l'ID dall'url (?id=x)
  $idRoom = $_GET['id'];

  // Query al database (tutte le colonne della stanza con id=x)
  $sql = "SELECT * FROM `stanze` WHERE `id` =  $idRoom";

  // $result è uguale alla query, una volta effettuata la connessione
  $result = $conn->query($sql);

  // Se la query è valida e restituisce almeno 1 record
  if ($result && $result->num_rows > 0) {

    // Room recupera il record
    $room = $result->fetch_assoc();
  } 
  
  // Altrimenti, se non ci rono record, stampa che non ci sono risultati
  elseif ($result) {
    echo 'No results';
  }
  
  // ALtrimenti, se la query è sbagliata, stampa che c'è un errore
  else {
    echo 'Query error';
  }
  
  // Chiudi la connessione al termine della query
  $conn->close();
