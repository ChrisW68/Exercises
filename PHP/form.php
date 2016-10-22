<?php

if(isset($_POST['submit'])) {
    
    $name = array("Peter", 
                  "Paul", 
                  "Mary", 
                  "Chris");
    
    $minimum = 4;
    $maximum = 12;
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    
    //Checks to see if the name is in the array
    //if not in array message will appear
    if(!in_array($username, $name)) {
        echo $username." You do not have access!"."<br>";
    }else {
        echo "Welcome: ". $username. "<br>";
    }
    
    if(strlen($username) < $minimum) {
        echo "Username has to be longer than five";
        
        
    }
    
    if(strlen($username) > 12) {
        echo "Username is too long";
    }
    
    
    
    echo "Thank You, goodbye!";
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
 
    <form action="form.php" method="post">
       <input type="text" placeholder="Enter Username" name="username"><br>
       <input type="password" placeholder = "Enter password" name="password">
       <br>
       <input type="submit" name="submit">
    </form>
</body>
</html>