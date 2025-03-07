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
     * function add
     * Ajouter un produit
     * */
    public function add(){
        // chargement du produit
        Produit::addProduct($_POST['nom'], $_POST['prix'], $_POST['stock']);

        // retour à index
        header("Location: index.php");
    }

    /**
     * function edit
     * Modifier un produit
     *
     * @param int $id Id du produit
     *  */
    public function edit(int $id) {
        // chargement du produit
        Produit::editProduct($_POST['nom'], $_POST['prix'], $_POST['stock'], $id);

        // retour à index
        header("Location: index.php");
    }

    /**
     * function remove
     * retirer un produit
     *
     * @param int $id Id du produit
     * */
    public function remove($id){
        // chargement du produit
        Produit::removeProduct($id);

        // Inclusion de la vue
        header("Location: index.php");
    }
}