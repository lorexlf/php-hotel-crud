<?php
   include_once __DIR__ .'/../env.php';
   include __DIR__ .'/../database.php';
   include __DIR__ .'/../functions.php';

   if(empty($_POST['id'])) {
      die('ID non trovato');
   }
   if(empty($_POST['beds'])) {
         die('Numero letti non inserito');
   }
   if(empty($_POST['floor'])) {
         die('Piano non inserito');
   }
   if(empty($_POST['room_number'])) {
         die('Numero camera non trovato');
   }
  
   // Salvo come variabili i valori dei $_POST recuperati da edit.php
   $roomId = $_POST['id'];
   $roomNumber = $_POST['room_number'];
   $beds = $_POST['beds'];
   $floor = $_POST['floor'];

   // // Query per il record dell'ID
   // $sql = "SELECT * FROM `stanze` WHERE id = $roomId";
   // $result = $conn->query($sql);

   // if ($result && $result->num_rows > 0) { 
   //    $room = $result->fetch_assoc();
   // } 
   // else {
   //    die('ID non esistente');
   // }

   $result = getById($conn, 'stanze', $roomId);

   if (count($result) > 0) {
      // Query UPDATE con i nuovi valori
   
      // $sql = "UPDATE `stanze` SET `room_number` = $roomNumber, `beds` = $beds, `floor` = $floor, `updated_at` = NOW() WHERE id = $roomId";
      
      $sql = "UPDATE `stanze` SET `room_number` = ?, `beds` = ?, `floor` = ?, `updated_at` = NOW() WHERE id = ?";
      
      // $result = $conn->query($sql);

      $stmt = $conn->prepare($sql);
      $stmt->bind_param("iiii", $roomNumber, $beds, $floor, $roomId);
      $stmt->execute();

      $conn->close();

      // Una volta inserito l'UPDATE riportami alla pagina show della stanza
   
      // if($result) {
      //    header("Location: $basePath/show/show.php?id=$roomId");
      // } 
      // else {
      //    echo 'Errore durante l\'aggiornamento della stanza';
      // }

      if ($stmt->affected_rows > 0) {
         header("Location: $basePath/show/show.php?id=$roomId");
      } else {
         echo 'Errore durante l\'aggiornamento della stanza';
      }
   }
   else {
      die('La stanza non esiste');
   }

   