<?php
  // Include il database
  include __DIR__ . '/../database.php';

  // Se manca l'ID nell'indirizzo, ferma tutto
  if(empty($_POST['id'])) {
    die('ID errato');
  }

  // Variabile con l'ID nell'indirizzo
  $idRoom = $_POST['id'];

  // Query per tutti i record dell'ID
  $sql = "SELECT * FROM `stanze` WHERE `id` = `$idRoom`;";
  // Result è uguale alla query, una volta effettuata la connessione
  $result = $conn->query($sql);
  // Se non ci sono record associati, ferma tutto
  if($result && $result->num_rows == 0) {
    die('ID errato');
  }
  
  // Se l'ID esiste eseguiamo il DELETE
  $sql = "DELETE from `stanze` WHERE `id` = $idRoom";
  $result = $conn->query($sql);

  // Se DELETE va a buon fine riportami alla index
  if ($result) {
    // echo 'OK';
    header("Location: $basePath");
  } // Altrimenti stampa un errore
  else {
    echo 'Impossibile eliminare la stanza';
  }
  // Chiudere la connessione
  $conn->close();
