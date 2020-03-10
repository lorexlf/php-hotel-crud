<?php
  // Include env.php
  include 'env.php';

  // Stabilisce la connessione al database attraverso le credenziali-variabili.
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Se c'è un errore di connessione al database stampa un messaggio di errore e non esegue altro.
  if ($conn && $conn->connect_error) {
    echo 'Errore di connessione ' . $conn->connect_error; die();
  }