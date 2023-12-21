<?php

    session_start();   
     
    $nom_serveur = "localhost";
    $nom_base_de_donne = "gestion_stock";
    $utilisateur = "root";
    $motpass = "root";

    try {
        $connexion =  new PDO("mysql:host=$nom_serveur; dbname=$nom_base_de_donne", $utilisateur, $motpass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die("Erreu de connexion : " . $e->getMessage());
    }

?>