<?php
include 'header.php'
?>

    <h2>Détails des produits</h2>
<?php

if (!isset($produits)) {
    echo "<p>Erreur : produit non trouvé</p>";
    include 'footer.php';
    exit;
}

?>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        </thead>
        <tbody>
        <!-- PHP -->
        <?php foreach ($produits as $p): ?> <!-- les ":" c'est pour éviter d'ouvrir l'accolade du foreach -->
            <tr>
                <!-- on utilise ?= pour faire un echo -->
                <td><?=  htmlspecialchars($p['id_produit'])  ?></td>
                <td><?=  htmlspecialchars($p['nom_produit'])  ?></td>
                <td><?=  htmlspecialchars($p['prix_produit'] . ' €')  ?></td>
                <td><?=  htmlspecialchars($p['stock_produit'])  ?></td>
                <td><button><a href="../views/editProduct.php?id=<?= $p['id_produit']; ?>">Modifier</a></button></td>
                <td><button><a
                                href="index.php?action=remove&id=<?= $p['id_produit']; ?>"
                                onclick="return confirm('Voulez-vous vraiment supprimer ce produit ?');"
                        >Supprimer</a></button></td>
            </tr>
        <?php endforeach; ?> <!-- là on ferme l'accolade du foreach en gros -->
        </tbody>
    </table>

    <div>
        <button><a href="../views/addProduct.php">Ajouter un article</a></button>
    </div>
<?php
include 'footer.php'
?>