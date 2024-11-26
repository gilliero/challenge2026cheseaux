<?php
$sport = isset($_GET["sport"]) ? htmlspecialchars($_GET["sport"]) : "Sport non spécifié";
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

    <div class="button-container"><button class="styled-button" type="submit">S'inscrire</button></div>
</form>
</div>
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
