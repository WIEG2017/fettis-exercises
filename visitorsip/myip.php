<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <style>
        header{
            position: fixed;
            top:0px;
            right:0px;
            left:0px;
            height: 50px;
            background-color:grey;
            text-align:center;
        }
        .wrapper{
            width:150px;
            height:150px;
            border:1px solid black;
            margin:auto;
            margin-top:150px;
        }
    </style>
    <header>
    hej
</header>
<body>
    <?php 
        echo "<div class='wrapper'>
        <h1>".$_SERVER['REMOTE_ADDR']."</h1>
        </div>"
        ;

        
    ?>



</body>
</html>