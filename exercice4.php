<?php
    include 'function.php';
    $connect = connexion();
    $stmt = $connect->prepare("SELECT * FROM clients ORDER BY lastName ASC ");
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<br>";
    echo "<h2> Voici les clients dont le nom commence par la lettre 'M' : </h2><br>"; 
    for ($i = 0 ; $i < count($data3) ; $i++  ){
        if (startM($data3[$i]["lastName"])){
            echo "<strong>Nom : </strong>".$data3[$i]["lastName"]."<br><strong>Prenom : </strong>".$data3[$i]["firstName"]."<br>"; 
        }
    }

?>