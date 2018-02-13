<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Broken</title>
</head>
<body>

<?php

function Randomize() {

    $n = rand (1, 100);
    $b = 50;
    if ($n > $b)  {
     echo "<h1> Denna sidan funkar bara ibland </h1> ";
} else{
   
    echo "<h1>404 Not Found</h1>";
    echo "The page that you have requested could not be found.";
    die();
}
}   

Randomize();
?>
    
 
</body>
</html>