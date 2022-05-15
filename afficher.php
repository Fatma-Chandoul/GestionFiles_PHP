<html>

<head>
    <link href="bootstrap\bootstrap4\css\bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="header bg-primary text-white">
                        <h2>liste des fichiers disponibles</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="add.php" class="form-inline" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Fichier a telecharger</label>
                                <input type="file" class="form-control" name="f1"><br>
                                <input type="submit" value="upload" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <?php
                        $dos = opendir("Dossiers");
                        echo "<ul>";
                        $nb = 0;
                        while ($f = readdir($dos)) {
                            if ($f != '.' && $f != '..') {
                                echo '<li> ' . $f . ' <a href="del.php?f=' . $f . '"> (supp)</a></li>';
                                $nb++;
                            }
                        }
                        echo "</ul>";
                        ?>

                    </div>
                    <div class="card-footer bg-info text-white">
                        <h2><?= $nb ?> fichiers disponibles</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>