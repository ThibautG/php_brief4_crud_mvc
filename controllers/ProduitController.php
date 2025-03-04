<?php

// Class VoitureController
// ce controller gère les actions qui concernent la voiture
// son but est de récupérer les données et d'inclure la vue

require_once __DIR__ . '/../models/Produit.php';

class ProduitController {
    /**
     * function details tous les produits
     * Afficher les détails des produits
     *
     * @param
     * */

    public function details(){
        // chargement du produit
        $produits = Produit::loadProducts();

        if (!$produits){
            echo "Produits non trouvés";
            return; // permet d'arrêter la fonction ici si on remplit la condition
        }

        // Inclusion de la vue
        include __DIR__ . '/../views/productDetails.php';
    }


    /**
     * function details
     * Afficher les détails du produit (selon l'id)
     *
     * @param int $id Id du produit
     * */

    public function detailsProduit($id){
        // chargement du produit
        $produit = Produit::loadById($id);

        if (!$produit){
            echo "Produit non trouvée";
            return; // permet d'arrêter la fonction ici si on remplit la condition
        }

        // Inclusion de la vue
        include __DIR__ . '/../views/productDetails.php';
    }

    // réparation de la voiture
    public function repair($id){
        // Charger la voiture
        $voiture = Voiture::loadById($id);

        if (!$voiture){
            echo "Voiture non trouvée";
            return; // permet d'arrêter la fonction ici si on remplit la condition
        }

        // Créer une nouvelle instance de mécanicien
        $mecanicien = new \models\Mecanicien('Nanard');

        // Appel de la fonction
        $mecanicien->reparerVoiture($voiture);

        // Inclusion de la vue
        include __DIR__ . '/../views/voitureDetails.php';

    }

    // constatation que la voiture est en panne
    public function failure($id){
        // Charger la voiture
        $voiture = Voiture::loadById($id);

        if (!$voiture){
            echo "Voiture non trouvée";
            return; // permet d'arrêter la fonction ici si on remplit la condition
        }

        // Créer une nouvelle instance de mécanicien
        $mecanicien = new \models\Mecanicien('Jeannot');

        // Appel de la fonction
        $mecanicien->constaterPanne($voiture);

        // Inclusion de la vue
        include __DIR__ . '/../views/voitureDetails.php';

    }
}