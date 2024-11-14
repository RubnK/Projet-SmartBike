<h1>Bienvenue chez Smartbike</h1>
<div>
    <p>Smartbike est une entreprise innovante spécialisée dans la conception et la vente de vélos de haute qualité, adaptés aux besoins modernes de mobilité urbaine et de loisirs. En alliant design élégant et technologies avancées, Smartbike offre des vélos performants, durables et écologiques, parfaits pour les amateurs de cyclisme comme pour les déplacements quotidiens en ville. Notre mission est de faciliter les trajets quotidiens de manière écologique tout en garantissant confort, style et sécurité à chaque utilisateur.</p>

    <img src="../img/Smartbike.webp">

    <p><?= $velo['name'] ?></p>
    <p><?= $velo['type'] ?></p>
    <p><?= $velo['price'] ?> €</p>
    <p><?= $velo['description'] ?></p>
    <a href="/?page=produit&velo=<?= $velo['bike_id'] ?>">Plus d'infos</a>
</div>