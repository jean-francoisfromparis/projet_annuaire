<?php
//Fuseau horaire
date_default_timezone_set('Europe/Paris');
//nom et ouverture de session
session_name('monrepertoire'); // Defaut : PHPSESSID
session_start();

// Connexion BDD

$pdo = new  PDO (
    'mysql:host=localhost;charset=utf8;dbname=repertoire',
    'root',
    '',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC //on peut passer en FETCH_object à tout moment
    )
    );
