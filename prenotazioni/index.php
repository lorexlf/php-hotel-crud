<?php
   include 'server.php';
   include_once __DIR__ . '/../env.php';
   include __DIR__ . '/../partials/header.php';
?>

<div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Tutte le prenotazioni</h1>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Room ID</th>
              <th>Created</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Se ci sono record - Senza funzione results = rooms
            if (count($results) > 0) {
              foreach ($results as $prenotazioni) { ?>

               <tr>
                  <td><?php echo $prenotazioni['id'] ?></td>
                  <td><?php echo $prenotazioni['stanza_id'] ?></td>
                  <td><?php echo $prenotazioni['created_at'] ?></td>
                  <td><a href="<?php echo $basePath ?>/prenotazioni/show/show.php?id=<?php echo $prenotazioni['id'] ?>">View</a></td>
                  <td></td>
                  <td></td>
               </tr>
            <?php }
           
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>

</html>