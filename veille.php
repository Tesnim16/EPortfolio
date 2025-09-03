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
            Ma Veille Technologique
        </h1>
        <p>
            Voici quelques articles et ressources que j'ai trouvés intéressants.
        </p>
    </section>

    <section class="presentation" id="presentation">

        <h1>Qu'est-ce que la veille technologique ?</h1>
        <p>La veille technologique est un processus continu de surveillance et d'analyse des évolutions technologiques,
            des tendances du marché et des innovations dans un domaine spécifique. Elle permet aux entreprises et aux
            professionnels de rester informés des nouveautés, d'anticiper les changements et de prendre des décisions
            éclairées pour leur développement stratégique.</p>

    </section>

    <section class="article" id="article">
        <h1>Voici les outils de veille technologique que j'utilise</h1>
        <div class="article-grid">
            <div class="article-item">
                <div class="article-card">
                    <div class="card-front">
                        <h3>Feedly</h3>
                        <div class="tech-skill">
                            <p>Outil de veille RSS</p>
                        </div>
                    </div>
                    <div class="card-back">
                        <h3>Feedly</h3>
                        <p>Feedly est un agrégateur de flux RSS qui permet de centraliser et organiser les sources
                            d'information. Il facilite la veille en offrant une interface conviviale pour suivre les
                            actualités, blogs et publications dans un seul endroit.</p>
                        <a href="https://feedly.com/" target="_blank">Voir le site</a>
                    </div>
                </div>
            </div>
            <div class="article-item">
                <div class="article-card">
                    <div class="card-front">
                        <h3>Inoreader</h3>
                        <div class="tech-skill">
                            <p>Outil de veille RSS</p>
                        </div>
                    </div>
                    <div class="card-back">
                        <h3>Inoreader</h3>
                        <p>Inoreader est un autre agrégateur de flux RSS qui offre des fonctionnalités avancées pour la
                            veille technologique. Il permet de filtrer, organiser et automatiser la gestion des
                            informations, facilitant ainsi le suivi des sujets d'intérêt.</p>
                        <a href="https://www.inoreader.com/" target="_blank">Voir le site</a>
                    </div>
                </div>
            </div>
            <div class="article-item">
                <div class="article-card">
                    <div class="card-front">
                        <h3>Google Alerts</h3>
                        <div class="tech-skill">
                            <p>Outil de veille par alertes</p>
                        </div>
                    </div>
                    <div class="card-back">
                        <h3>Google Alerts</h3>
                        <p>Google Alerts est un service gratuit de Google qui permet de recevoir des notifications par
                            email lorsqu'un nouveau contenu correspondant à des mots-clés spécifiques est publié en ligne.
                            C'est un outil simple mais efficace pour rester informé des dernières actualités et tendances
                            dans un domaine particulier.</p>
                        <a href="https://www.google.com/alerts" target="_blank">Voir le site</a>
                    </div>
                </div>
            </div>
    </section>

    <footer>
        <p>&copy; <?php echo $year; ?> BENAMA Tesnim. Tous droits réservés.</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>