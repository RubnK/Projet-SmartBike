<h1>Nos vélos</h1>
<?php foreach ($velos as $velo): ?>
    <h2><?= $velo['name'] ?></h2>
    <p>Type : <?= $velo['type'] ?></p>
    <p>Prix : <?= $velo['price'] ?> €</p>
    <a href="/?page=produit&velo=<?= $velo['bike_id'] ?>">Plus d'infos</a>
    <a href="/?page=commander&velo=<?= $velo['bike_id'] ?>">Commander</a>
<?php endforeach; ?>