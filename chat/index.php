<?php 

include './process/pdo.php'

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        if(isset($_POST['pseudo']) AND isset($_POST['password']) AND !empty($_POST['pseudo']) AND (!empty($_POST['passsword']))){
            
            echo 'Bienvenue, ' .htmlspecialchars($_POST['pseudo']);
        }else{
            header('Location: connexion.php');
        }
    
    ?>
</body>
</html>