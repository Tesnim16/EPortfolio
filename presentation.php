<?php
$year = date("Y");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="parcours.css">
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
                <li><a href="veille.php">Ma veille</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="hero" id="accueil">
        <h1>
            Présentation
        </h1>
        <p>
            A propos de moi (Parcours scolaire, expériences professionnels)
        </p>
    </section>
    <section class="parcours" id="parcours">
        <br>
        <h1>Mon Parcours</h1>
        <div class="timeline">
            <div class="timeline-item left">
                <div class="timeline-dot"></div>
                <h3>2015 - 2019</h3>
                <p>Collège - Collège Jean Jaurès</p>
            </div>
            <div class="timeline-item right">
                <div class="timeline-dot"></div>
                <h3>2020 - 2024</h3>
                <p>Baccalauréat ST2S - Lycée Rive Gauche</p>
            </div>
            <div class="timeline-item left">
                <div class="timeline-dot"></div>
                <h3>2024 - 2026</h3>
                <p>BTS SIO - Institut Limayrac</p>
            </div>
            <div class="timeline-item right">
                <div class="timeline-dot"></div>
                <h3>2025 - 2025</h3>
                <p>Stage - Limayrac <br> Développement d'application</p>
        </div>
        </div>
    </section>
    <section class="cv">
        <h1>Mon CV</h1>
        <p>
            Vous trouverez ci-dessous un aperçu de mon parcours scolaire et professionnel. Pour plus de détails,
            n'hésitez pas
            à consulter mon CV.
        </p>
        <img src="img/BENAMA Tesnim CV Alternance SLAM.png" alt="Mon CV" class="cv-image">
        <p>Vous pouvez télécharger mon CV en cliquant sur le lien ci-dessous :</p>
        <a href="pdf/BENAMA Tesnim CV Alternance SLAM (1).pdf" class="cv-link" target="_blank">Télécharger mon CV</a>
    </section>
    <footer>
        <p>&copy; <?php echo $year; ?> BENAMA Tesnim. Tous droits réservés.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>