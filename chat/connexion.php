<?php



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include './process/pdo.php'; ?>

    <form action="./index.php" method="POST">
        <label for="pseudo"></label>
        <input type="text" name="pseudo">

        <label for="password"></label>
        <input type="password" name="password">

        <input type="submit" value="envoyer">
    </form>
    
</body>
</html>