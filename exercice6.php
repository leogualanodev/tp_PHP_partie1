<?php
    include 'function.php';
    $connect = connexion();
    $stmt5 = $connect5->prepare("SELECT * FROM clients ");
    $stmt5->execute();
    $data5 = $stmt5->fetchAll(PDO::FETCH_ASSOC);
    echo "<h2> Exercice 7 : </h2><br>";
    for ($i = 0 ; $i < count($data5) ; $i++){
        if ( $data5[$i]["card"] == 0 ){
            echo "<strong>Nom : </strong>".$data5[$i]["lastName"]."<br> <strong>Prénom : </strong>".$data5[$i]["firstName"]."<br> <strong>Date de Naissance : </strong>".$data5[$i]["birthDate"]."<br> <strong>Carte de Fidélité : NON</strong><br><br>" ;
        } else {
            echo "<strong>Nom : </strong>".$data5[$i]["lastName"]."<br> <strong>Prénom : </strong>".$data5[$i]["firstName"]."<br> <strong>Date de Naissance : </strong>".$data5[$i]["birthDate"]."<br> <strong>Carte de Fidélité : OUI</strong><br><strong>Numéro de Carte: </strong>".$data5[$i]["cardNumber"]."<br><br>" ;
        }
    }
?>
