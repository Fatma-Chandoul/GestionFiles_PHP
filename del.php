<?php
$f=$_GET["f"];
unlink("Dossiers/".$f);
header("location:afficher.php");
?>