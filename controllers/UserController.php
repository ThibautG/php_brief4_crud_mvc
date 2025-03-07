<?php

require_once __DIR__ . '/../models/User.php';


class UserController{
    /**
     * function register
     * Ajouter un user
     * */
    public function register(){
        // chargement du produit
        User::registerUser($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mot_de_passe']);

        // retour à index
        header("Location: index.php");
    }

}