<?php
$sport = isset($_GET['sport']) ? htmlspecialchars($_GET['sport']) : "Sport non spécifié";

// Variables de connexion à la base de données
$host = "localhost"; // Adresse du serveur de base de données
$dbname = "challenge2026cheseaux"; // Nom de la base de données
$username = "root"; // Nom d'utilisateur
$password = "root"; // Mot de passe

// Établir une connexion à la base de données
// Ajouter la connexion à la base de données avant d'utiliser $pdo
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Ajouter cette condition pour exécuter le traitement uniquement après soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer et valider les données du formulaire
    $nom_equipe = isset($_POST['nom_equipe']) ? htmlspecialchars($_POST['nom_equipe']) : null;
    $nombre_equipes = isset($_POST['nombre_equipes']) ? intval($_POST['nombre_equipes']) : null;
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : null;
    $telephone = isset($_POST['telephone']) ? htmlspecialchars($_POST['telephone']) : null;

    // Vérifier que toutes les données nécessaires sont fournies
    if ($nom_equipe && $nombre_equipes && $email && $telephone) {
        try {
            // Préparer et exécuter la requête d'insertion
            $stmt = $pdo->prepare("
                INSERT INTO t_sport (nom_sport, equipe_sport, nombre_sport, mail_sport, phone_sport)
                VALUES (:nom_sport, :equipe_sport, :nombre_sport, :mail_sport, :phone_sport)
            ");

            $stmt->execute([
                ':nom_sport' => $sport,
                ':equipe_sport' => $nom_equipe,
                ':nombre_sport' => $nombre_equipes,
                ':mail_sport' => $email,
                ':phone_sport' => $telephone,
            ]);

            // Redirection en cas de succès
            header("Location: ../../HTML/SPORT/sport.html");
            exit;
        } catch (PDOException $e) {
            die("Erreur lors de l'enregistrement des données : " . $e->getMessage());
        }
    } else {
        die("Veuillez remplir tous les champs du formulaire.");
    }
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>47ème Challenge UJGDV à Cheseaux</title>
    <link rel="stylesheet" href="../../CSS/SPORT/inscription.css">
    <link rel="shortcut icon" href="../../img/logo.png" />
    <style>
        .menu-toggle {
                display: none;
}

.dropdown {
  max-width: 10000px;
}

/* Bouton du menu avec une apparence élégante */
.dropbtn {
  background-color: rgb( 123, 44, 50);
  color: white;
  padding: 10px;
  font-size: 18px;
  border: none;
  width: 50px;
  text-align: center;
  cursor: pointer;
  transition: background-color 0.3s ease;
  border-radius: 5px;
}

.dropbtn:hover {
  background-color: rgb(105, 32, 38);
}

/* Conteneur du menu déroulant avec un effet de flou et des bordures arrondies */
.dropdown-content {
  position: absolute; /* Maintient l'alignement sous le bouton */
  right: 0;
  background-color: rgba(255, 255, 255, 0.9);
  backdrop-filter: blur(10px);
  min-width: 160px;
  max-width: 100vw; /* Empêche le menu de dépasser la largeur de l'écran */
  box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
  z-index: 1;
  overflow: hidden;
  opacity: 0;
  transform: translateY(-10px);
  transition: opacity 1s ease, transform 1s ease;
  visibility: visible; /* Masqué par défaut */
  margin-top: 0; /* Supprime le décalage */
  width: 100vw; /* Utilise toute la largeur de la vue */
  margin-top: 53%;
  text-align: left;
  pointer-events: none; /* Désactive les clics par défaut */
}

.link {
  border-top: 0.5px #b3b3b3 solid;
  border-bottom: 0.5px #b3b3b3 solid;
}

/* Liens du menu */
.dropdown-content a {
  color: #333;
  padding: 12px 22px;
  text-decoration: none;
  display: block;
  width: 100%;
  transition: background-color 0.3s ease;
  font-size: 15px;
}

.dropdown-content a:hover {
  background-color: #f1f1f1;
}

/* Classe pour afficher le menu avec animation */
.dropdown-content.show {
  pointer-events: auto; /* Active les clics quand visible */
  visibility: visible; /* Rendu visible */
  opacity: 1; /* Menu complètement opaque */
}


@media (max-width: 814px) {
  .menu-toggle {
    display: inline-block;
  }
    
  .active {
    display: none;
  }

  .time-box {
        width: 30%;
        height: auto;
    }

    .fontsize {
      font-size: 25px;
      display: block;
    }

    .styled-button {
      margin-bottom: 20px;
    }
#presentation{
  font-size: 1.8rem;
}

.size {
font-size: 14px
}

.dropbtn.close {
  background-color: #ff9100;
  color: white;
  font-size: 16px;
  border: none;
  content: '✖';
}
}

    </style>
</head>
<body>
<header>
      <a href="../../index.html"><img src="../../img/logo.png" class="logo" alt="Logo"></a>
        <nav>
            <ul>
                <li class="active"><a href="/Error/Pageindisponible.html">Programme</a></li>
                <li class="active"><a href="/Error/Pageindisponible.html">Bénévolat</a></li>
                <li class="active"><a href="../HTML/SPORT/sport.html">Sport</a></li>
                <li class="active"> <a href="/Error/Pageindisponible.html">Gadgets</a></li>
                <li class="active"><a href="/Error/Pageindisponible.html">Infos Pratiques</a></li>
                <li class="active"><a href="/Error/Pageindisponible.html">Sponsors</a></li>
                <li class="active"><a href="/Error/Pageindisponible.html">Membres</a></li>
                <li class="active"><a href="/Error/Pageindisponible.html">Contact</a></li>

               <div class="dropdown">
                <li class="menu-toggle"><button class="dropbtn" >&#9776;</button></li>
                <div class="dropdown-content">
                  <a href="/Error/Pageindisponible.html" class="link">Programme</a>
                  <a href="/Error/Pageindisponible.html" class="link">Bénévolat</a>
                  <a href="../HTML/SPORT/sport.html" class="link">Sport</a>
                  <a href="/Error/Pageindisponible.html" class="link">Gadgets</a>
                  <a href="/Error/Pageindisponible.html" class="link">Infos Pratiques</a>
                  <a href="/Error/Pageindisponible.html" class="link">Sponsors</a>
                  <a href="/Error/Pageindisponible.html" class="link">Membres</a>
                  <a href="/Error/Pageindisponible.html" class="link">Contact</a>
                </div>
                    </div>
            </ul>
        </nav>
    </header>
<div class="formulaire">
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

    <div class="button-container"><button class="styled-button" type="submit">Inscrire</button></div>
</form>
</div>
<footer>
  <br>
    <p>Suivez-nous sur <a href="https://www.instagram.com/challenge2026cheseaux?igsh=MWh5ZDl4bG12MGhpMQ%3D%3D&utm_source=qr" target="_blank">Instagram</a> et <a href="https://www.tiktok.com/@challenge2026cheseaux?_t=8pqsKsimreS&_r=1" target="_blank">TikTok</a></p>
    <p>&copy; 47ème Challenge UJGDV à Cheseaux 2026 | Tous droits réservés.</p>
    <br>
</footer>
<script>
      document.addEventListener("DOMContentLoaded", function() {
        const menuToggle = document.querySelector(".menu-toggle button");
        const dropdownContent = document.querySelector(".dropdown-content");
    
        menuToggle.addEventListener("click", function() {
          // Basculer l'affichage du menu avec la classe .show
          dropdownContent.classList.toggle("show");
    
          // Basculer entre icônes menu et croix
          if (dropdownContent.classList.contains("show")) {
            menuToggle.textContent = '✖'; // Icône de croix
          } else {
            menuToggle.textContent = '☰'; // Icône de menu
          }
        });
      });
    </script>
</body>
</html>
