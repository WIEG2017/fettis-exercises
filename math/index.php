<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Issue #14 The Math one!!</title>
<style>
body{
    text-align: center;
    padding: 10%;
    background-color: pink;
    color: white;

}
</style>

</head>
<body>
<h1>Issue #14 The math one!</h1>
<form method = "GET" action = "index.php">
  Ange tal 1:
  <input type="number" name="tal1" min="1" max="9999"><br>
  Ange tal 2:
  <input type="number" name="tal2" min="1" max="9999"><br>
 
 
  <input type="submit" value="Submit">
</form>
<?php


function räkna($tal1, $tal2){

    $summa = $tal1 + $tal2;

    return $summa;

}





echo "summan är: ". räkna($_GET["tal1"],$_GET["tal2"]);

?>



</body>
</html>