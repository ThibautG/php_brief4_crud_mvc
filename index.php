<?php

/*phpinfo();*/ // permet d'ouvrir une page sur la doc de php avec la version qu'on utilise

/**
 * Front controller
 *
 * Point d'entrée de l'application
 * Il lit les paramètres passés dans l'URL
 * Selon ces paramètres, il instancie (il charge, il initialise) le controller qui convient
 * */

// Démarrage de la session
session_start();

// Inclusion des contrôleurs (ici il n'y a que produit)
require_once 'controllers/ProduitController.php';

// Récupération des paramètres de l'action via l'URL (par exemple : index.php?action=details)
$action = isset($_GET['action']) ? $_GET['action'] : 'details';

// Même chose avec l'id
$id = isset($_GET['id']) ? intval($_GET['id']) : 2; // si on a rien on charge l'id 1 par défaut

// instanciation du contrôleur
$controller = new ProduitController();


// Routage (selon la valeur de l'action)
/*if ($action == 'details'){
    // Appel de la méthode pour afficher les détails de la voiture
    $controller->details($id);
} else {
    // Si l'action n'existe pas
    echo "Action n'existe pas";
}*/

switch ($action) {
    case 'details' :
        // Appel de la méthode pour afficher les détails des produits
        $controller->details();
        break;
    case 'add' :
        // Appel de la méthode pour ajouter un produit
        $controller->add();
        break;
    case 'failure' :
        // Appel de la méthode pour constater panne de la voiture
        $controller->failure($id);
        break;
    default:
        // Si l'action n'existe pas
        echo "Action n'existe pas";
}



?>