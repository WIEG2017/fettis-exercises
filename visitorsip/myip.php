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
            height: 90px;
            background-color:grey;
            text-align:center;
        }
        .wrapper{
            width:350px;
            height:150px;
            color:white;
            margin:auto;
            margin-top:150px;
            text-align:center;
            background-color: grey;
            padding-top:50px;
        }
    </style>
    <header>
    <h1>Detta är din IP address 😁</h1>
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