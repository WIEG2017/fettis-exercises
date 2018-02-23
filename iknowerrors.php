<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>I AM ERROR!</title>
    </head>
    <body>
        <?php
            echo "<p>This include won't work because the file doesn't exist!</p>";
            include "thisdoesn'texist.php";

            echo "<p>This won't work because the variable isn't set!</p>";
            echo $derp;

            echo "<br/><p>This function will throw an error because the function isn't written!</p>";
            nope(500);
        ?>
    </body>
</html>