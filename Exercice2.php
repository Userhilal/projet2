<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Révision PHP</title>
</head>
<body>
    <?php
    $etudiant = ["nom" => "Benomar", "prénom" => "Leila", "matricule" => "202401"];
    echo "<p>Nom : {$etudiant['nom']}, Prénom : {$etudiant['prénom']}, Matricule : {$etudiant['matricule']}</p>";

    $etudiant['note'] = 14;
    $etudiant['note'] = 16;
    echo "<p>Note de l'étudiant : {$etudiant['note']}</p>";

    $produits = [
        ["nom" => "Farine", "prix" => 7],
        ["nom" => "Sucre", "prix" => 5],
        ["nom" => "Beurre", "prix" => 15]
    ];
    foreach ($produits as $produit) {
        echo "<p>Produit : {$produit['nom']}, Prix : {$produit['prix']} MAD</p>";
    }

    $scores = [
        "Imane" => 16,
        "Omar" => 19,
        "Rania" => 14,
        "Samir" => 15,
        "Nadia" => 17
    ];
    $moyenne = array_sum($scores) / count($scores);
    echo "<p>Moyenne des scores : {$moyenne}</p>";

    $pays = [
        "Espagne" => 47000000,
        "France" => 67000000,
        "Italie" => 60000000
    ];
    arsort($pays);
    foreach ($pays as $nom => $population) {
        echo "<p>Pays : {$nom}, Population : {$population}</p>";
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['nom'], $_POST['age'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $age = intval($_POST['age']);
        if ($age > 0) {
            echo "<p>Bienvenue, {$nom}, vous avez {$age} ans !</p>";
        } else {
            echo "<p>Erreur : L'âge doit être un entier positif.</p>";
        }
    }
    ?>
    <form method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <label for="age">Âge :</label>
        <input type="number" id="age" name="age" required>
        <button type="submit">Envoyer</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['couleur'])) {
        $couleur = htmlspecialchars($_POST['couleur']);
        echo "<p>Votre couleur préférée est : {$couleur}</p>";
    }
    ?>
    <form method="post">
        <label for="couleur">Choisissez une couleur :</label>
        <select id="couleur" name="couleur">
            <option value="Jaune">Jaune</option>
            <option value="Violet">Violet</option>
            <option value="Orange">Orange</option>
        </select>
        <button type="submit">Envoyer</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['num1'], $_GET['num2'])) {
        $num1 = floatval($_GET['num1']);
        $num2 = floatval($_GET['num2']);
        $somme = $num1 + $num2;
        echo "<p>La somme est : {$somme}</p>";
    }
    ?>
    <form method="get">
        <label for="num1">Nombre 1 :</label>
        <input type="number" id="num1" name="num1" required>
        <label for="num2">Nombre 2 :</label>
        <input type="number" id="num2" name="num2" required>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['compte'])) {
        $compte = htmlspecialchars($_POST['compte']);
        if ($compte === "Administrateur") {
            echo "<p>Bienvenue, administrateur !</p>";
        } else {
            echo "<p>Bienvenue, utilisateur simple !</p>";
        }
    }
    ?>
    <form method="post">
        <label for="compte">Type de compte :</label>
        <select id="compte" name="compte">
            <option value="Administrateur">Administrateur</option>
            <option value="Utilisateur">Utilisateur</option>
        </select>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
