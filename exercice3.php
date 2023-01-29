<?php
    icnlude 'function.php';
    $connect = connexion();
    $stmt = $connect->prepare("SELECT * FROM clients WHERE card=0 ");
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<br>";
    echo "<h2> Voici les clients qui n'ont pas de cartes </h2><br>";
    
    for ($i=0 ; $i < count($data2) ; $i++){
        echo "-".$data2[$i]["lastName"]." ".$data2[$i]["firstName"]."<br>" ;
    }
?>