<?php
include 'server.php';
include 'partials/header.php';
?>

<body>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Tutte le stanze</h1>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Room Number</th>
              <th>Floor</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Se ci sono record
            if (!empty($rooms)) {
              // Per ogni record stampa una riga di tabella html
              foreach ($rooms as $room) { ?>
                <tr>
                  <!-- Prendi l'ID -->
                  <td><?php echo $room['id'] ?></td>
                  <!-- Prendi il numero della stanza -->
                  <td><?php echo $room['room_number'] ?></td>
                  <!-- Prendi il piano della stanza -->
                  <td><?php echo $room['floor'] ?></td>
                  <!-- View: link alla stanza con ID dinamico -->
                  <td><a href="show/show.php?id=<?php echo $room['id'] ?>">VIEW</a></td>
                  <!-- Update: link per la modifica alla stanza con ID dinamico -->
                  <td><a href="update/edit.php?id=<?php echo $room['id'] ?>">UPDATE</a></td>
                  <td>
                    <!-- Delete: link per l'eliminazione della stanza con ID dinamico -->
                    <form action="delete/server.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $room['id'] ?>">
                      <input class="btn-danger" type="submit" value="DELETE">
                    </form>
                  </td>
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