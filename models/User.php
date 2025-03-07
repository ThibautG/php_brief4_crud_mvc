<?php

require_once 'Database.php';
class User{

// propriétés privées (encapsulation)
    private $id; // id unique de la base de données
    private $nom;
    private $prenom;
    private $email;
    private $mdp;


    // Constructeur : initialisation du produit
    // on peut définir un état initial d'une propriété au moment de déclaration du constructeur
    public function  __construct($nom, $prenom, $email, $mdp, $id = null) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mdp = $mdp;
        $this->id = $id; // on initialise à null car ça ne s'incrémentera que lorsqu'on fera l'appel à BDD
    }

    // Getter pour l'id
    public function getId(){
        return $this->id;
    }
    // Getter pour le nom
    public function getNom(){
        return $this->nom;
    }
    // Getter pour le prenom
    public function getPrenom(){
        return $this->prenom;
    }
    // Getter pour le mail
    public function getEmail(){
        return $this->email;
    }
    // Getter pour le mdp
    public function getMdp(){
        return $this->mdp;
    }
    // Getter pour les détails du user
    // Différence avec afficherDetails = on peut éxécuter et utiliser que quand on voudra
    // alors que afficherDetails ça va s'afficher que à l'endroit où on l'utilise direct
    public function getDetails() { // on utilise public pour que la fonction sot accessible partout
        return "Utilisateur : " . $this->nom . " " . $this->prenom . ", Email : " . $this->email;
    }

    // Setter pour modifier le nom du user
    public function setNom($nouveauNom) {
        $this->nom = $nouveauNom;
    }
    // Setter pour modifier le prenom
    public function setPrenom($nouveauPrenom) {
        $this->prenom = $nouveauPrenom;
    }
    // Setter pour modifier l'email
    public function setEmail($nouvelEmail) {
        $this->email = $nouvelEmail;
    }
    // Setter pour modifier le mdp
        public function setMdp($nouveauMdp) {
            $this->email = $nouveauMdp;
        }

    // Méthode pour affichage des détails du User
    public function afficherDetails() { // on utilise public pour que la fonction soit accessible partout
        echo "Utilisateur : " . $this->nom . " " . $this->prenom . ", Email : " . $this->email;
    }

    /** Register un nouveau User dans la BDD
     * @param string $nom le nom
     * @param string $prenom le prénom
     * @param string $email l'e-mail
     * @param string $mdp le mdp
     * @return boolean true si suppression OK sinon false
     * */
    public static function register($nom, $prenom, $email, $mdp): bool{
        // on récupère PDO via la Class Database
        $db = Database::getInstance()->getConnection();

        // hachage du mot de passe (bcrypt et 10 salages)
        $hashedPassword = password_hash($mdp, PASSWORD_BCRYPT, ['cost' => 10]);
        // l'insertion de l'utilisateur
        $stmt = $db->prepare("INSERT INTO utilisateur (nom, prenom, email, mot_de_passe) VALUES (?,?,?,?)");
        return $stmt->execute([$nom, $prenom, $email, $hashedPassword]);
    }


}