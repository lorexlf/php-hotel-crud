<?php
  include 'database.php';

  if(empty($_POST['id'])) {
    die('NO ID');
  }

  $idRoom = $_POST['id'];

  $sql = "DELETE from `stanze` WHERE `id` = $idRoom";
  $result = $conn->query($sql);

  if ($result) {
    echo 'OK';
  } 
  else {
    echo 'KO';
  }

  $conn->close();
