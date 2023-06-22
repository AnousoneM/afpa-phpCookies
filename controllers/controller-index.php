<?php

// tableau d'erreurs 
$errors = [];

// je détecte si une requête de type post est présent
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Je recherche la clef create pour créer mon cookie
    if (isset($_POST['create'])) {

        // je lance mes verifications si 'choice' est présent dans la superGlobal $_POST
        if (isset($_POST['choice'])) {
            if (empty($_POST['choice'])) { // si empty, je fais un message d'erreur
                $errors['choice'] = 'Veuillez saisir votre passion';
            } else { // sinon je créé le cookie choice
                setcookie("choice", htmlspecialchars($_POST['choice']), time() + 3600, "/", "", 1);
                $message = 'Votre Cookie a bien été créé';
            }
        }
    }

    // je recherche la clef delete
    if (isset($_POST['delete'])) {
        // je set le cookie en time en negatif
        setcookie("choice", '', time() - 3600, "/", "", 1);
        $message = 'Votre Cookie a bien été supprimé';
    }
}
