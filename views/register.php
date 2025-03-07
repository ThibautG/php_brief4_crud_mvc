<?php
include 'header.php'
?>


<h1>Inscription</h1>

<form method="post" action="../../brief4_crud_mvc/index.php?action=register">

    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>

    <label for="mot_de_passe">Mot de passe :</label>
    <input type="password" id="mot_de_passe" name="mot_de_passe" required>

    <button type="submit">S'inscrire</button>

</form>

<a href="../../brief4_crud_mvc/views/login.php">Déjà inscrit ? Connectez-vous !</a>



<?php
include 'footer.php'
?>
