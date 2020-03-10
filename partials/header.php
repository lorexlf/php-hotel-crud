<?php
  include_once __DIR__ . '/../env.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost:8888/php-hotel-crud/dist/app.css">
  <title>Document</title>
</head>

<body>
  
  <header>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg mb-5">
      <div class="container">
        <div class="navbar-brand">HOTEL</div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="<?php echo $basePath?>">All Rooms</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $basePath?>/create/create.php">Add room</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>