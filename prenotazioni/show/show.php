<?php
   include 'server.php';
   include __DIR__ . '/../../partials/header.php';
?>

   <div class="container">
   <div class="row">
     <div class="col-12">
       <div class="card">
         <ul>
           <li>Numero prenotazione: <?php echo $prenotazione['id'] ?></li>
           <li>Numero stanza: <?php echo $prenotazione['room_number'] ?></li>
           <li>Nome ospite <?php echo $prenotazione['name'].' '.$prenotazione['lastname'] ?></li>
           <li>Creata il: <?php echo $prenotazione['created_at'] ?></li>
           <li>Aggiornato il: <?php echo $prenotazione['updated_at'] ?></li>
         </ul>
       </div>
     </div>
   </div>
 </div>
</body>

</html>