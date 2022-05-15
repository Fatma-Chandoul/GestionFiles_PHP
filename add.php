<?php
$des="Dossiers/".$_FILES["f1"]["name"];
move_uploaded_file($_FILES["f1"]["tmp_name"],$des);
header("location:afficher.php");

?>
