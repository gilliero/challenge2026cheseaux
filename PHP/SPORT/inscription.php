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

