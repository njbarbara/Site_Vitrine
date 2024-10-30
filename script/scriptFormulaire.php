<?php
// http://londres.uca.local/~nabarbara/cache/
// mettre le fichier php dans public_html/

if(empty($_POST['nom'])) {
    echo '<p class="erreur">Le nom doit être renseigné !</p>';
}
else { 
    echo 'Bonjour ' . $_POST['nom'] . ' ! ';
}

if(empty($_POST['email'])) { 
    echo '<p class="erreur">Adresse email doit être renseigné !</p>';
}
else { 
    echo 'Votre adresse mail est ' . $_POST['email'] . ' ! ';
}

//utiliser filtervar();


?>