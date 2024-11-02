<?php
// http://londres.uca.local/~nabarbara/cache/
// mettre le fichier php dans public_html/

$erreur = 0;
if(empty($_POST['nom'])) {
    echo 'Le nom doit être renseigné ! </br>';
    $erreur = 1;
}
else { 
    echo 'Bonjour ' . $_POST['nom'] . ' ! </br>';
}

if(empty($_POST['email'])) { 
    echo 'Adresse email doit être renseigné ! </br>';
    $erreur = 1;
}
else { 
    if (filter_var(value: $_POST['email'], filter: FILTER_VALIDATE_EMAIL)) {
        echo 'Votre adresse mail est ' . $_POST['email'] . ' ! </br>';
    }
    else{
        echo 'adresse mail au format incorrect </br>';
        $erreur = 1;
    }
}

if (empty($_POST['msg'])) {
    echo 'Le message doit etre renseigné </br>';
    $erreur = 1;
} 
else {
    echo 'Votre message est ' . $_POST['msg'] . '. </br>';
}

if(empty($_POST['creneau'])){
    echo 'Le créneau doit etre renseigné </br>';
    $erreur = 1;
}
else{
    echo 'Votre créneau est : ' .  $_POST['creneau'] . '. </br>';
}

if($erreur == 1){
    echo 'Erreur, refaire le formulaiure </br>';
}

?>