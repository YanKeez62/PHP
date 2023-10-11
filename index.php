<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traducteur Anglais - Français</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php if (!isset($resultat)) : ?>
    <form method="post" action="traducteur.php">
        <label for="word">Mot à traduire :</label>
        <input type="text" id="word" name="word" required>
        <label for="sens">Sens :</label>
        <select id="sens" name="sens" required>
            <option value="frenchToEnglish">Français vers Anglais</option>
            <option value="englishToFrench">Anglais vers Français</option>         
        </select>
        <input type="submit" value="Traduire">
    </form>
<?php else : ?>
    <h2>Résultat : </h2>
    <h2><?php echo $resultat; ?></h2>
<?php endif; ?>

</body>
</html>
