<?php

// Fonction pour les requetes SQL

function sql(string $requete, array $params = array()) : PDOStatement{

    global $pdo;
    $statement = $pdo->prepare($requete);

    if( !empty($params) ){
        foreach($params as $key => $value){
            $statement->bindValue($key,htmlspecialchars($value),PDO::PARAM_STR);
        }
    }
    $statement->execute();

    return $statement;

}

// Fonctions des messages

function add_flash(string $message, string $classe){
    if(!isset($_SESSION['messages'][$classe])){
        $_SESSION['messages'][$classe] = array();
    }
    $_SESSION['messages'][$classe][] = $message;
}

function show_flash($option=null){

    $messages = '';
    if(isset($_SESSION['messages'])){

        foreach( array_keys($_SESSION['messages']) as $keyname ){
            $messages .= '<div class="alert alert-' . $keyname .'"> ' . implode('<br>',$_SESSION['messages'][$keyname]) .'</div>';
        }
    }

    if($option == 'reset'){
        // Je détruis les messages pour ne les afficher qu'une fois
        unset($_SESSION['messages']);
    }
    
    return $messages;

}


