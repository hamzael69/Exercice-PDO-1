<?php

require_once './utils/connect-db.php';

$sql = "SELECT * FROM shows" ;

try{

    $stmt = $pdo->query($sql);
    $shows = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $error){
    echo "Erreyr lors de la requete : " . $error->getMessage();
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
    <h1>Liste des spectacles :</h1>
    <ul>
        <?php
        foreach ($shows as $show) {

        ?>
            <li>Spectacles : <?= $show['title'] ?> </li>

        <?php
        }
        ?>
    </ul>
</body>

</html>