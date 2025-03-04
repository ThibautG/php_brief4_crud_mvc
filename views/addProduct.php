<?php
include 'header.php'
?>

<h2>Ajouter un produit</h2>
<form action="../../brief4_crud_mvc/index.php?action=add" method="post">
    <div>
        <label for="nom">Nom : </label>
        <input type="text" id="nom" name="nom" required>
    </div>
    <div>
        <label for="prix">Prix : </label>
        <input type="number" id="prix" name="prix" required>
    </div>
    <div>
        <label for="stock">Stock : </label>
        <input type="number" id="stock" name="stock" required></input>
    </div>
    <div>
        <button type="submit">Ajouter</button>
    </div>
</form>

<?php
include 'footer.php'
?>
