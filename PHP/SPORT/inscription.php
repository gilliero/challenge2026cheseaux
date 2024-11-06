<?php
$sport = isset($_GET["sport"]) ? htmlspecialchars($_GET["sport"]) : "Sport non spécifié";
echo htmlspecialchars($sport);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>47ème Challenge UJGDV à Cheseaux</title>
    <link rel="stylesheet" href="../template/template.css">
</head>
<body>

<h1>Inscription au <?php echo htmlspecialchars($sport); ?></h1>

<form method="POST" action="?sport=<?php echo urlencode($sport); ?>">
    <label for="nom_equipe">Nom de l'équipe :</label>
    <input type="text" id="nom_equipe" name="nom_equipe" required><br><br>

    <label for="nombre_equipes">Nombre d'équipes :</label>
    <input type="number" id="nombre_equipes" name="nombre_equipes" required><br><br>

    <label for="email">Adresse e-mail :</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="telephone">Numéro de téléphone :</label>
    <input type="tel" id="telephone" name="telephone" required><br><br>

    <button type="submit">S'inscrire</button>
</form>

</body>
</html>
