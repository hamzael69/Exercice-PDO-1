<?php

require_once './utils/connect-db.php';

$sql = "SELECT * FROM clients WHERE cardNumber" ;

try{

    $stmt = $pdo->query($sql);
    $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $error){
    echo "Erreur lors de la requete : " . $error->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Liste des clients membrés :</h1>    
<ul>
    <?php
    foreach($clients as $client){
        ?>
        <li>Nom : <?= $client['lastName'] ?> | Prénom : <?= $client['firstName'] ?> | Numéro de carte : <?= $client['cardNumber'] ?></li>
        <?php
    }
    ?>
</ul>


</body>
</html>