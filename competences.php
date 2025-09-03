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
    <section class="hero" id="hero">
        <h1>
            Mes Compétences
        </h1>
        <p>Voici les différentes compétences que j'ai pu acquérir.</p>
    </section>
    <section class="presentation" id="presentaion">
        <h1>Mes Compétences</h1>
        <p>Au cours de ma formation en BTS SIO option SLAM, j'ai acquis diverses compétences techniques et
            professionnelles. Voici un aperçu des principales compétences que j'ai développées :</p>
        <div class="competences">
            <div class="icon-container">
                <img src="img/html.svg" alt="HTML" class="competences-image">
                <h3>HTML</h3>
            </div>
            <div class="icon-container">
                <img src="img/css.svg" alt="CSS" class="competences-image">
                <h3>CSS</h3>
            </div>
            <div class="icon-container">
                <img src="img/javascript.svg" alt="JavaScript" class="competences-image">
                <h3>JavaScript</h3>
            </div>
            <div class="icon-container">
                <img src="img/php.svg" alt="PHP" class="competences-image">
                <h3>PHP</h3>
            </div>
            <div class="icon-container">
                <img src="img/github.svg" alt="GitHub" class="competences-image">
                <h3>GitHub</h3>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; <?php echo $year; ?> BENAMA Tesnim. Tous droits réservés.</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>