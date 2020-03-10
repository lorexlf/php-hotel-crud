<?php
   include_once __DIR__ . '/../../database.php';

   if(empty($_GET['id'])) {
      die('Non hai inserito un ID');
   }

   $prenotazioneId = $_GET['id'];

   $sql = "SELECT `prenotazioni`.*, `stanze`.`room_number`, `ospiti`.`name`, `ospiti`.`lastname` FROM `prenotazioni` INNER JOIN `prenotazioni_has_ospiti` ON `prenotazioni`.`id` = `prenotazioni_has_ospiti`.`prenotazione_id` INNER JOIN `ospiti` ON `prenotazioni_has_ospiti`.`ospite_id` = `ospiti`.`id` INNER JOIN `stanze` ON `prenotazioni`.`stanza_id` = `stanze`.`id` WHERE `prenotazioni`.`id` = $prenotazioneId";

   // $stmt = $conn->prepare($sql);
   // $stmt->bind_param("i", $prenotazioneId);

   // $stmt->execute();

   $result = $conn->query($sql);

   if($result){
      $prenotazione = $result->fetch_assoc();
   } else {
      die('Error');
   }
   $conn->close();