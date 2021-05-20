<?php
require_once('init.php');
require_once('fonction.php');


?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="./datepicker-fr.js"></script>

<link rel="stylesheet" href="assets/css/style.css">
<title>Affichage Annuaire</title>
</head>
<body>
<div class="container text-center"><h1>Affichage Annuaire</h1></div>
<?php


        $nom            = valid_donnees($_POST['nom']);
        $prenom         = valid_donnees($_POST['prenom']);
        $tele           = valid_donnees($_POST['tele']);
        $profession     = valid_donnees($_POST['profession']);
        $ville          = valid_donnees($_POST['ville']);
        $cp             = valid_donnees($_POST['cp']);
        $adresse        = valid_donnees($_POST['adresse']);
        $date_naissance = valid_donnees($_POST['datepicker']);
        $description    = valid_donnees($_POST['description']);

function valid_donnees ($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}

    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tele'])){
        $errors = 0;
        // $reponse = $pdo->query
        sql("INSERT INTO annuaire ( nom, prenom, tele, profession, ville, cp, adresse, date_naissance, description ) 
            VALUES ('$nom', '$prenom', '$tele', '$profession', '$ville', '$cp', '$adresse', '$date_naissance','$description')");
       
        add_flash('Les données ont été enregistré','success');
        exit();
       
    }
    else
    { 
        add_flash('Merci de rentrer un nom','danger'); 
    }


?>




<script src="autocompletion.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>


</body>
</html>