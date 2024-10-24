<?php
// Récupérer la valeur du sport dans l'URL
$sport = isset($_GET['sport']) ? htmlspecialchars($_GET['sport']) : '';

// Connexion à la base de données
$host = 'localhost'; // Change selon ton serveur
$dbname = 'challenge2026cheseaux'; // Change selon le nom de ta base de données
$username = 'root'; // Change selon ton utilisateur MySQL
$password = 'Gregf00t2007'; // Change selon ton mot de passe MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $nom_equipe = htmlspecialchars($_POST['nom_equipe']);
    $nombre_equipes = (int) $_POST['nombre_equipes'];
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);

    // Préparer et exécuter la requête d'insertion
    $stmt = $pdo->prepare("INSERT INTO inscriptions (nom_equipe, nombre_equipes, email, telephone, sport) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nom_equipe, $nombre_equipes, $email, $telephone, $sport]);

    // Message de confirmation
    echo "<p>Votre inscription pour le tournoi de $sport a bien été enregistrée.</p>";
}
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
    <header>
        <nav>
            <ul>
                <li><a href="../../index.html"><img src="/img/logo.png" class="logo"></a></li>
                <li><a href="../HTML/PROGRAMME/programme.html">Programme</a></li>
                <li><a href="../HTML/BENEVOLAT/benevolat.html">Bénévolat</a></li>
                <li><a href="../HTML/SPORT/sport.html">Sport</a></li>
                <li><a href="../HTML/GADGETS/gadgets.html">Gadgets</a></li>
                <li><a href="../HTML/INFOS-PRATIQUES/infos-pratques.html">Infos Pratiques</a></li>
                <li><a href="../HTML/SPONSORS/sponsors.html">Sponsors</a></li>
                <li><a href="../HTML/MEMBRES/membres.html">Membres</a></li>
                <li><a href="../HTML/CONTACTS/contacts.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="template">
        <h1>Inscription au tournoi de <?php echo ucfirst($sport); ?></h1>

        <form method="POST">
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
    </section>

    <footer>
        <p>Suivez-nous sur <a href="https://www.instagram.com/challenge2026cheseaux?igsh=MWh5ZDl4bG12MGhpMQ%3D%3D&utm_source=qr">Instagram</a> et <a href="https://www.tiktok.com/@challenge2026cheseaux?_t=8pqsKsimreS&_r=1">TikTok</a></p>
        <p>&copy; 47ème Challenge UJGDV à Cheseaux 2026 | Tous droits réservés.</p>
        <p>Website by Grégory Gilliéron</p>
    </footer>
</body>

</html>
