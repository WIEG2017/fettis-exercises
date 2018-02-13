<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>What is my IP</title>
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
            /* color:white; */
        }
        .wrapper{
            width:350px;
            height:150px;
            margin:auto;
            margin-top:150px;
            text-align:center;
            background-color: grey;
            padding-top:50px;
            border-radius:50%;
        }
        h2{
            color:white;
            font-size:40px; 
        }
        h2:hover {
            color: red;
        }
    </style>
    <header>
    <h1>This is your IP adress 😁</h1>
</header>
<body>
    <?php 
        echo "<div class='wrapper'>
        <h2>".$_SERVER['REMOTE_ADDR']."</h2>
        </div>"
        ;

        
    ?>



</body>
</html>