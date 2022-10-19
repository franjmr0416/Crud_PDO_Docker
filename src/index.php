<?php
require 'config/database.php';
$db = new Database();
$db->conectar();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/css/bootstrap.min.css" />
  <script src="public/js/bootstrap.bundle.min.js"></script>
  <title>CRUD PDO</title>
</head>

<body class="py-3">
  <main class="container">
    <div class="row">
      <div class="col">
        <h4>Productos</h4>
        <a href="nuevo.php" class="btn btn-primary float-right">Nuevo</a>
      </div>
    </div>
  </main>
</body>

</html>