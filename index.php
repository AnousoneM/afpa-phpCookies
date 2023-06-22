<?php
require 'controllers/controller-index.php';
var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice sur les cookies</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body class="bg-secondary">

    <div class="row justify-content-center mt-5 mx-0 pt-3">
        <div class="col-lg-3 col-10 bg-light border border-secondary shadow rounded p-4">

            <?php 
            // si ma variable message n'est pas set alors j'affiche formulaire
            if (!isset($message)) { ?>

                <?php if (isset($_COOKIE['choice'])) { ?>
                    <p class="h3 text-center fw-bold">Vous, vous aimez déja</p>
                    <form action="" method="POST">
                        <p class="h3 text-center"><?= $_COOKIE['choice'] ?? '' ?></p>
                        <input name="delete" type="submit" class="btn btn-lg btn-dark text-center d-block mx-auto" value="Supprimer mon Cookie !"></input>
                    </form>
                    <a href="index.php" class="btn btn-outline-dark d-block mt-3">Recharger la page</a>
                <?php } else { ?>
                    <p class="text-center h4">... Moi, j'aime bien ...</p>
                    <form action="" method="POST">
                        <span class="d-block text-center text-danger fs-5"><?= $errors['choice'] ?? '' ?></span>
                        <input class="d-block my-3 mx-auto" type="text" name="choice">
                        <input name="create" type="submit" class="btn btn-lg btn-dark text-center d-block mx-auto" value="Créer mon Cookie !"></input>
                    </form>
                <?php } ?>

            <?php } else { ?>
                <!-- j'affiche la valeur de message -->
                <p class="text-center h3"><?= $message ?? '' ?></p>
                <a href="index.php" class="btn btn-outline-dark d-block mt-3">Recharger la page</a>
            <?php } ?>

        </div>
    </div>

</body>

</html>