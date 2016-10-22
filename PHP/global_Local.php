<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
   $thisIsATest = "Global";
    
    function thisIsLocal() {
        global $thisIsATest;
        $thisIsATest = "Local";
    }
    
    echo $thisIsATest. "<br>";
    thisIsLocal();
    echo $thisIsATest;
    
    echo round(4.5);
    ?>
</body>
</html>