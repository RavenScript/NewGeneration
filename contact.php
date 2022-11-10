<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Contact</title>
</head>

<body>
    <h1>Contactez-nous !</h1>
    <form method="post">
        <label>Nom</label>
        <input type="text" name="nom" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Sujet</label>
        <input type="text" name="sujet" required>
        <textarea name="message" required></textarea>
        <input type="submit" value="Envoyer le message">
    </form>

    <?php
    if (isset($_POST["message"])) {
        $message = "Ce message vous a été envoyer via la page conctat du site NewGeneration.fr
        Nom : " . $_POST["nom"] . "
        Email : " . $_POST["email"] . "
        Message : " . $_POST["message"];
        $retour = mail(
            "Lucascorbeau412@gmail.com", $_POST["sujet"],
            $message, "From:contact@site.fr\r\nReply-to:" . $_POST["email"]
        );
        if ($retour) {
            echo "<p> Message envoyé avec succès ! Vous pouvez maintenant fermer cette page.</p>";
        }
    }
    ?>

</body>

</html>