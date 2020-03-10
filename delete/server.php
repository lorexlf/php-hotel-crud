<?php
  include __DIR__ . '/../database.php';

  // Se manca l'ID nell'indirizzo, ferma tutto
  if(empty($_POST['id'])) {
    die('ID errato');
  }

  // Variabile con l'ID nell'indirizzo
  $idRoom = $_POST['id'];

  // Se l'ID non esiste
  $sql = "SELECT * FROM `stanze` WHERE `id` = `$idRoom`;";
  // result è uguale alla query, una volta effettuata la connessione
  $result = $conn->query($sql);
  // Se non ci sono record associati, ferma tutto
  if($result && $result->num_rows == 0) {
    die('ID errato');
  }
  
  // Se l'ID esiste eseguiamo il DELETE
  $sql = "DELETE from `stanze` WHERE `id` = $idRoom";
  $result = $conn->query($sql);

  if ($result) {
    // echo 'OK';
    header("Location: $basePath");
  } 
  else {
    echo 'NO!';
  }

  $conn->close();
