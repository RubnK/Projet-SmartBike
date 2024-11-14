<h1><?= $velo['name'] ?></h1>
<p>Type : <?= $velo['type'] ?></p>
<p>Prix : <?= $velo['price'] ?> €</p>

<?php foreach ($images as $image): ?>
    <img src="/img/<?= $image['url'] ?>">
<?php endforeach; ?>

<p><?= $velo['description'] ?></p>
<a href="/?page=commander&velo=<?= $velo['bike_id'] ?>">Commander</a>

<style>
    img{
        width: 400px;
        height: 200px;
        object-fit: cover;
    }
</style>