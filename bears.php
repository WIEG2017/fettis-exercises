<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bears</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<?php


abstract class Animal {
    public abstract function anAbstractFunction();

}


class Bear extends Animal {

    public function anAbstractFunction() {

    }

    private function aPrivateFunction() {
        //nån kod
    }
}

$NallePuh = new Bear;
$Bamse = new Bear;
$Björne = new Bear;



?>
    
</body>
</html>