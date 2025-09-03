<?php

$year = date("Y");

// Renseignez votre adresse e-mail de réception ci-dessous
$recipientEmail = 'tesnim.benama@limayrac.fr';

// Détecte le retour de succès après envoi via FormSubmit
$success = isset($_GET['success']) && $_GET['success'] === '1';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
            Contact
        </h1>
        <p>
            Vous avez une question/opportunité ? Envoyez-moi un message !
        </p>
    </section>

    <section class="presentation" id="contact">
        <?php if ($success): ?>
            <h1>Merci pour votre message !</h1>
            <p>Je vous répondrai dès que possible.</p>
        <?php else: ?>
            <h1>Me contacter</h1>
            <form method="post" action="<?php echo 'https://formsubmit.co/' . urlencode($recipientEmail); ?>" style="max-width:600px;width:100%;text-align:left">
                <input type="hidden" name="_next" value="<?php echo htmlspecialchars((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?') . '?success=1', ENT_QUOTES, 'UTF-8'); ?>">
                <input type="hidden" name="_subject" value="Nouveau message depuis le portfolio">
                <input type="hidden" name="_template" value="table">
                <input type="text" name="website" style="display:none">
                <input type="hidden" name="_captcha" value="false">

                <div style="margin-bottom:12px">
                    <label for="name">Nom</label><br>
                    <input type="text" id="name" name="name" required style="width:100%;padding:10px;border-radius:8px;border:1px solid #ccc">
                </div>
                <div style="margin-bottom:12px">
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" required style="width:100%;padding:10px;border-radius:8px;border:1px solid #ccc">
                </div>
                <div style="margin-bottom:12px">
                    <label for="message">Message</label><br>
                    <textarea id="message" name="message" rows="6" required style="width:100%;padding:10px;border-radius:8px;border:1px solid #ccc"></textarea>
                </div>
                <button type="submit" style="padding:10px 20px;border:none;border-radius:6px;background:#ac6ca2;color:#fff;cursor:pointer">Envoyer</button>
            </form>
        <?php endif; ?>
    </section>

    <footer>
        <p>&copy; <?php echo $year; ?> BENAMA Tesnim. Tous droits réservés.</p>
    </footer>
</body>

</html>


