<?php
    include 'function.php';
    $connect = connexion();
    $stmt = $connect->prepare("SELECT * FROM showtypes ");
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<br>";
    echo "<h2>Voici les différents types de spectales de la base de données : </h2><br>";
    for ($i = 0 ; $i < count($data1) ; $i++){
        echo "-".$data1[$i]["type"]."<br>";
    }


?>