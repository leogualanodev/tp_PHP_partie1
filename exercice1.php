<?php
    include 'function.php';
    $connect = connexion(); 
    $stmt = $connect->prepare("SELECT * FROM clients LIMIT 0,20");
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    
    echo "<h2>Voici les 20 premiers clients de la base de données :</h2> <br>";
    
    for ($i=0 ; $i < count($data) ; $i++){
        echo "-".$data[$i]["lastName"]." ".$data[$i]["firstName"]."<br>" ;
    }


?>