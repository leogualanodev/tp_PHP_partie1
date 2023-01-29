<?php
    include 'function.php';
    $connect = connexion();
    $stmt = $connect->prepare("SELECT * FROM shows ORDER BY title ASC ");
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<br>";
    echo "<h2> Voici tous les spectacles : </h2><br>";
    
    
    for ($i = 0 ; $i < count($data4) ; $i++ ){
        echo "- ".$data4[$i]["title"]." par ".$data4[$i]["performer"]." le ".$data4[$i]["date"]." à partir de ".$data4[$i]["startTime"]."<br>" ;
    }

?>