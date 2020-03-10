<?php
   include_once __DIR__ .'/../env.php';
   include __DIR__ .'/../database.php';

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
  

   $roomId = $_POST['id'];
   $roomNumber = $_POST['room_number'];
   $beds = $_POST['beds'];
   $floor = $_POST['floor'];

   $sql = "SELECT * FROM `stanze` WHERE id = $roomId";
   $result = $conn->query($sql);


   if ($result && $result->num_rows > 0) { 
      $room = $result->fetch_assoc();
   } 
   else {
      die('ID non esistente');
   }

   $sql = "UPDATE `stanze` SET `room_number` = $roomNumber, `beds` = $beds, `floor` = $floor, `updated_at` = NOW() WHERE id = $roomId";

   $result = $conn->query($sql);

   if($result) {
      header("Location: $basePath/show/show.php?id=$roomId");
   } 
   else {
      echo 'KO';
   }