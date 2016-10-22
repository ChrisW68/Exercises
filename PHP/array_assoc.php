<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
   
   $number = array(10, 20, 125);
    
    echo $number[1]. "<br>";
    
    $cost = array("cost per unit" => 15, "cost per 100" => 12);
    
    print_r($cost);
   
    echo "<br>". $cost['cost per unit']."</br>". $cost["cost per 100"];
    ?>
</body>
</html>