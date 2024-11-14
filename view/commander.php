<h1>Commander un vélo</h1>
<form method="POST">
    <select name="velo_id">
        <?php foreach ($velos as $velo): ?>
            <option value="<?= $velo['bike_id'] ?>" <?php if($_GET['velo']==$velo['bike_id']){echo('selected');} ?>><?= $velo['name'] ?></option>
        <?php endforeach; ?>
    </select>
    <input type="text" name="nom" placeholder="Nom" required><br>
    <input type="text" name="prenom" placeholder="Prénom" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="adresse" placeholder="Adresse" required><br>
    <textarea name="message" placeholder="Message"></textarea><br>
    <button type="submit">Envoyer</button>
</form>

