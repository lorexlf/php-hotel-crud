<?php
include 'server.php';
include __DIR__ . '/../partials/header.php';
?>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <ul>
            <li>Id: <?php echo $room['id'] ?></li>
            <li>Floor: <?php echo $room['floor'] ?></li>
            <li>Room Number <?php echo $room['room_number'] ?></li>
            <li>Beds: <?php echo $room['beds'] ?></li>
            <li>Creata il: <?php echo $room['created_at'] ?></li>
            <li>Aggiornato il: <?php echo $room['updated_at'] ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>

</html>