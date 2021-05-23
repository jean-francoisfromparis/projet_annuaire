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
<link rel="stylesheet" href="./style.css">

<title>Affichage Annuaire</title>
</head>
<body>
<div class="container text-center"><h1>Affichage Annuaire</h1></div>
<hr class="mb-3">
<?php


    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tele'])){
        $errors = 0;

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
    echo'<form action="" method="get">';
    echo'<div class="container mx-0 px-0">';
        echo'<div class="row">';
    //Affichage des colonnes de la table

    $reponse = $pdo->query("SELECT * FROM annuaire");
    echo'<div class="col-11">';
    echo '<table class="table table-striped table-hover table-sm" style="border-collapse : collapse; width: 100%; ">';

    echo '<tr>';
        for($i = 0; $i < $reponse->columnCount(); $i++) {
            $infos_colonne = $reponse->getColumnMeta($i);
            echo '<th>' . ucfirst($infos_colonne['name']) . '</th>';
        }
// ucfirst() pour avoir la première lettre en majuscule
    echo '</tr>';

    while($ligne = $reponse->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';

        foreach($ligne AS $valeur) {
                echo '<td contenteditable="true">' . $valeur . '</td>';        
        }
        echo '</tr>';
    }
    echo '</table>';
    echo'</div>';
    
   
    $reponse2 = $pdo->query("SELECT * FROM annuaire");
    echo'<div class="col">';
        echo'<table class="table table-striped table-sm" style="border-collapse : collapse; width: 100%; ">';
        echo '<tr ><th class="text-center"><i class="fas fa-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="Mettre à jour"></i></th></tr>';
    while($ligne2 = $reponse2->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr class="text-center">';
        {
                echo '<td class"py-0" ><a href="?action=delete&id='.$ligne2['id'].'" class="btn btn-danger confirm fa fa-times py-0" style=" height: 1.1rem; width:3rem"></a></td>';        
        }
            echo '</tr>';
    }
            echo'</table>';
            echo'</div>';
        echo'</div>';
echo'</div>';
echo'</form>';
//Traitement des suppression de données du tableau du repertoire
    if(isset($_GET['action']) && $_GET['action'] == 'delete' && !empty($_GET['id']) && is_numeric($_GET['id']))
                {
                  sql("DELETE FROM annuaire WHERE id=:id", array(
                        'id' => $_GET['id']
                  )) ;
                  add_flash('La catégorie a été supprimé','success');
                  header('location:'.$_SERVER['PHP_SELF']).
                    exit();


                }




?>



<script src="autocompletion.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>


</body>
</html>