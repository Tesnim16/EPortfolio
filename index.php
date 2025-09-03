<?php

$year = date("Y");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <title>Portfolio - BENAMA Tesnim</title>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="presentation.php">Présentation</a></li>
        <li><a href="projet.php">Mes projets</a></li>
        <li><a href="E5.php">E5</a></li>
        <li><a href="competences.php">Mes compétences</a></li>
        <li><a href="">Ma veille</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </nav>
  </header>
  <section class="hero" id="accueil">
    <h1>
      Bienvenue sur mon Portfolio
    </h1>
    <p>
      Je suis BENAMA Tesnim, étudiant en BTS SIO option SLAM.
    </p>
  </section>

  <section class="presentation" id="presentation">
    <h1>Découvrir le BTS SIO</h1>
    <p>
      Le BTS SIO (Services Informatiques aux Organisations) est une formation de deux ans qui prépare les étudiants à
      devenir des professionnels de l'informatique. Il propose deux spécialités : SLAM (Solutions Logicielles et
      Applications Métiers) et SISR (Solutions d'Infrastructure, Systèmes et Réseaux). Les étudiants acquièrent des
      compétences en développement, gestion de projets informatiques, administration de systèmes et réseaux, ainsi que
      la capacité à répondre aux besoins des entreprises en matière de solutions informatiques.
    </p>
    <div class="card-container">
      <div class="card">
        <div class="card-inner">
          <div class="card-front">
            <h3 class="option">
              Option SLAM
            </h3>
          </div>
          <div class="card-back">
            L’option SLAM du BTS SIO forme aux métiers du développement d’applications. Elle permet d’apprendre à
            concevoir,
            coder et maintenir des logiciels ou des sites web, en utilisant des langages comme HTML, CSS, JavaScript,
            PHP et
            des bases de données comme MySQL.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-inner">
          <div class="card-front">
            <h3 class="option">
              Option SISR
            </h3>
          </div>
          <div class="card-back">
            L’option SISR (Systèmes Informatiques et Systèmes Réseaux) du BTS SIO forme des techniciens spécialisés dans
            l’installation, la configuration et la maintenance des réseaux et des systèmes informatiques d’entreprise,
            incluant la sécurité et la virtualisation.
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about" id="about">
    <h1>À propos de moi</h1>
    <p>
      Je suis BENAMA Tesnim, étudiant en BTS SIO option SLAM.
      Je suis également passionné par l'informatique et le développement web. J'aime apprendre de nouvelles technologies et
      relever des défis techniques. Mon objectif est de devenir un développeur compétent et de contribuer à des projets
      innovants.
    </p>
  </section>

  <footer>
    <div class="footer-content">
      <p>© <?= $year ?> BENAMA Tesnim. Tous droits réservés.</p>
      </div>
    </div>
  </footer>
  <script src="script.js"></script>
</body>
</html>