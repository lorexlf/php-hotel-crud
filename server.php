<?php
   include 'database.php';

   // Query al database (tutte le colonne della tabella stanze)
   $sql = "SELECT * FROM `stanze`";
   
   // $result è uguale alla query, una volta effettuata la connessione
   $result = $conn->query($sql);

   // Se la query è valida e restituisce almeno 1 record
   if($result && $result->num_rows > 0) {

   // Creo la variabile $rooms (array)
   $rooms = [];

   // Finchè la query produce risultati (record)
   while ($row = $result->fetch_assoc()) {
      // Inserisci i record nell'array $rooms
      $rooms[] = $row;
   }
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