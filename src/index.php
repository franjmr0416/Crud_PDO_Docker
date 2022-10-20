<?php
require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$comando = $con->query("SELECT id, codigo, descripcion, stock FROM productos ORDER BY codigo ASC");

$comando->execute();
$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
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

    <div class="row py-3">
      <div class="col">
        <table class="table table-border">
          <thead>
            <tr>
              <th>#</th>
              <th>Código</th>
              <th>Descripción</th>
              <th>Stock</th>
              <th>#</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($resultado as $row) {
              echo '<td>' . $row['id'] . '</td>';
              echo '<td>' . $row['codigo'] . '</td>';
              echo '<td>' . $row['descripcion'] . '</td>';
              echo '<td>' . $row['stock'] . '</td>';
              echo '<td>' . $row['id'] . '</td>';
              echo '<td>' . $row['id'] . '</td>';
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>
</body>

</html>