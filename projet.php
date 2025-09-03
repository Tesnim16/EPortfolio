<?php

$year = date("Y");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BENAMA Tesnim - Portfolio</title>
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
        <li><a href="veille.php">Ma veille</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
    <section class="hero" id="accueil">
        <h1>
            Mes Projets
        </h1>
        <p>
            Découvrez mes projets réalisés dans le cadre de ma formation.
        </p>
    </section>
    <section class="presentation">
        <h1>Mes Projets</h1>
        <div class="project-grid">
            <div class="project-item">
                <div class="project-card">
                    <div class="card-front">
                        <h3>Site APPFAQ</h3>
                        <div class="tech-skill">
                            <p>HTML, CSS, JavaScript, PHP</p>
                        </div>
                    </div>
                    <div class="card-back">
                        <h3>Site APPFAQ</h3>
                        <p>Site web réalisé pour la Maison des Ligues de Lorraine. (Pour un projet de groupe)</p>
                        <a href="https://github.com/Tesnim16/m2l" target="_blank">Voir le projet</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy;<?php echo $year; ?> BENAMA Tesnim. Tous droits réservés.</p>
    </footer>
</body>

</html>