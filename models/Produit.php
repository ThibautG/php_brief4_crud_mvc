<?php


require_once 'Database.php';
/*  ==============================
    Class produit (on va la créer)
    ================================
    Caractéristiques : nom, prix, stock
    on utilise :
    - des propriétés privées pour l'encapsulation (dans la classe)
    - un constructeur pour initialiser les objets
    - des getters (pour accéder aux données) et des setters ( pour modifier les données)
    - une méthode qui permet d'afficher les détails de l'objet (ici le produit)
 */

class Produit {

    // propriétés privées (encapsulation)
    private $id; // id unique de la base de données
    private $nom;
    private $prix;
    private $stock;

    // Constructeur : initialisation du produit
    // on peut définir un état initial d'une propriété au moment de déclaration du constructeur
    public function  __construct($nom, $prix, $stock, $id = null) {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->stock = $stock;
        $this->id = $id; // on initialise à null car ça ne s'incrémentera que lorsqu'on fera l'appel à BDD
    }

    // Getter pour l'id
    public function getId(){
        return $this->id;
    }

    // Getter pour la marque
    public function getNom(){
        return $this->nom;
    }
    // Getter pour le modèle
    public function getPrix(){
        return $this->prix;
    }
    // Getter pour l'année
    public function getStock(){
        return $this->stock;
    }
    // Getter pour les détails du produit
    // Différence avec afficherDetails = on peut éxécuter et utiliser que quand on voudra
    // alors que afficherDetails ça va s'afficher que à l'endroit où on l'utilise direct
    public function getDetails() { // on utilise public pour que la fonction sot accessible partout
        return "Produit : " . $this->nom . ", Prix : " . $this->prix . ", Stock : " . $this->stock ;
    }

    // Setter pour modifier le nom du produit
    public function setNom($nouveauNom) {
        $this->nom = $nouveauNom;
    }
 // Setter pour modifier le prix
    public function setPrix($nouveauPrix) {
        $this->prix = $nouveauPrix;
    }
 // Setter pour modifier le stock
    public function setStock($nouveauStock) {
        $this->stock = $nouveauStock;
    }

    // Méthode pour affichage des détails de la voiture
    public function afficherDetails() { // on utilise public pour que la fonction soit accessible partout
        echo "Produit : " . $this->nom . ", Prix : " . $this->prix . ", Stock : " . $this->stock ;
    }

    // Méthode pour sauvegarder le produit (l'instance) en BDD
    // Si l'id est null alors on fait une nouvelle insertion
    // Sinon on met à jour l'enregistrement

    public function save(){
        // on récupère PDO via la Class Database
        $db = Database::getInstance()->getConnection();

        if ($this->id === null) {
            // Insertion
            $stmt = $db->prepare("INSERT INTO produits (nom_produit, prix_produit, stock_produit) VALUES (?,?,?,?)");
            $stmt->execute([$this->nom, $this->prix, $this->stock]);

            // Récupération de l'ID généré (auto-incrémenté) par MySql
            $this->id = $db->lastInsertId();

        } else {
            // Mise à jour si la voiture existe déjà
            $stmt = $db->prepare("UPDATE produits SET nom_produit=?, prix_produit=?, stock_produit=? WHERE id_produit=?");
            $stmt->execute([$this->marque, $this->modele, $this->annee, $this->etat, $this->id]);
        }
    }

    // Méthode pour charger tous les produits provenant de la BDD
    /**
     * Charger les produits depuis la BDD via son ID
     * @return array|null on retourne l'objet produit (ou rien si non trouvé)
     */

    public static function loadProducts(){ // static car on va y accéder seulement dans Produit.php
        // on récupère PDO via la Class Database
        $db = Database::getInstance()->getConnection();

        // Récupération des infos dans la BDD
        $stmt = $db->query("SELECT * FROM produits");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    // Méthode pour charger le produit provenant de la BDD
    /**
     * Charger une voiture depuis la BDD via son ID
     * @param int $id id du produit
     * @return Produit|null on retourne l'objet produit (ou rien si non trouvé)
     */

    public static function loadById(int $id){ // static car on va y accéder seulement dans Produit.php
        // on récupère PDO via la Class Database
        $db = Database::getInstance()->getConnection();

        // Récupération des infos dans la BDD
        $stmt = $db->prepare("SELECT * FROM produits WHERE id_produit=?");
        $stmt->execute([$id]);

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];

        if ($data) {
            return new Produit($data['nom_produit'], $data['prix_produit'], $data['stock_produit'], $data['id_produit']);
        }

        // sinon on retourne null
        return null;
    }

}