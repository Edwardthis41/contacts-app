<?php
// para buscar en todo los archivos control + ship + f, remplazar los . mas rapido
require "database.php";

session_start();

if (!isset($_SESSION["user"])) {
  header("Location: login.php");
  return;
}

$contacts = $connection->query("SELECT * FROM contacts WHERE user_id = {$_SESSION['user']['id']}");

?>

<?php require "partials/header.php" ?>

<div class="container pt-4 p-3">
  <div class="row">

    <!-- Principal con bucle foreach a la izquierda -->
    <div class="col-md-8 mb-3">
      <?php if ($contacts->rowCount() == 0): ?>
        <div class="card card-body text-center">
          <p>No Existe Articulos</p>
          <a href="add.php">Añadir Uno!</a>
        </div>
      <?php endif ?>

      <?php foreach ($contacts as $contact): ?>
        <div class="card text-center mb-3">
          <div class="card-body">
            <h3 class="card-title text-capitalize"><?= $contact["name"] ?></h3>
            <p class="m-2"><?= $contact["phone_number"] ?></p>
            <a href="edit.php?id=<?= $contact["id"] ?>" class="btn btn-secondary mb-2">Editar Articulo</a>
            <a href="delete.php?id=<?= $contact["id"] ?>" class="btn btn-danger mb-2">Eliminar</a>
            <a href="#" class="btn btn-warning mb-2">Publicar</a>
          </div>
        </div>
      <?php endforeach ?>
    </div>

    <!-- Nueva tarjeta a la derecha en una columna de 4 -->
    <div class="col-md-4 mb-3">
      <div class="card text-center">
        <div class="card-body">
          <!-- Contenido de la nueva tarjeta -->
          <h3 class="card-title">Nueva Tarjeta</h3>
        </div>
      </div>
    </div>

  </div>
</div>


<?php require "partials/footer.php" ?>
