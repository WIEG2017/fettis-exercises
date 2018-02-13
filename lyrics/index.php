<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Songs with lyrics</title>
    <?php include 'data.php' ?>
</head>
<body>

<h1>Songs and lyrics</h1>

<ol>
<?php

foreach($songs as $song => $text){
    echo "<li><a href='index.php?song=$song'>$song</a><br>Click for lyrics</li><br>";
}

function printLyrics($songs){
    foreach($songs as $song => $text){
        if($_GET["song"] === $song){
            echo "$text";
        }
    }
}

printLyrics($songs);
?>
</ol>

</body>
</html>