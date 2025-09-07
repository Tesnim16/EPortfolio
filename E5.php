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
                <li><a href="veille.php">Ma veille</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="hero" id="accueil">
        <h1>
            Tableau de synthèse - Epreuve E5
        </h1>
        <p>
            Voici un tableau récapitulatif de mes compétences acquises.
        </p>
    </section>
    <section class="presentation" id="presentation">
        <h1>Tableau de synthèse des compétences</h1>
        <p>
            L’épreuve E5 du BTS SIO option SLAM (Solutions Logicielles et Applications Métiers) évalue la capacité du
            candidat à concevoir, développer et maintenir des applications répondant aux besoins d’une organisation.
            Elle repose sur la présentation et l’analyse de situations professionnelles issues du stage ou de projets
            réalisés, ainsi que sur l’utilisation d’outils et méthodes de développement. L’examen prend la forme d’un
            oral où le candidat justifie ses choix techniques et organisationnels.
        </p>

    </section>
    <section class="cv">
        <h1>Mon Tableau de synthèse</h1>
        <p>
            Vous trouverez ci-dessous un aperçu de mon parcours scolaire et professionnel. Pour plus de détails,
            n'hésitez pas
            à consulter mon tableau de synthèse.
        </p>
        <img src="img/Tableau de synthèse BENAMA Tesnim.png" alt="Tableau_de_synthèse" class="tableau-image">
        <p>Vous pouvez télécharger mon Tableau de synthèse en cliquant sur le lien ci-dessous :</p>
        <a href="pdf/Tesnim BENAMA Tableau_de_synthese_2024.pdf" class="tableau-link" target="_blank">Télécharger mon Tableau de synthèse</a>
    </section>
    <footer>
        <p>&copy; <?php echo $year; ?> BENAMA Tesnim. Tous droits réservés.</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>