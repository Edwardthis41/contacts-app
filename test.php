<?php
// las variables empiezan simpre por dolar
$contacts = ["Pepe","Antonio","Jose"]; ?>
// bucle for
<?php foreach ($contacts as $contact) { ?>
  // condicion si o if
  <?php if ($contact != "Pepe"){ ?>
    <div> <?= $contact ?> </div>
    <?php } ?>
<?php } ?>
