<?php 
session_start();

if (!$_SESSION["urllastname"] === "/register/results.php"){
    if(empty($_SESSION["forgottname"])){
        if(isset($_SESSION['name'])){
            header("location:results.php");
        }
    }
}   
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>
        header{
            text-align:center;
        }
        #wrapper{
            text-align:center;
            background-color:lightgrey;
            width:400px;
            height:150px;
            margin:auto;
            margin-top:80px;
            padding-top:50px;
        }
        .nameandinput{
            display:flex;
            flex-direction:row;
            justify-content: center;
        }
        .name{
            text-align:left;
            width:80px;
            margin-bottom:20px;
        }
        #submit{
            width:150px;
        }
        #missinginfo{
            margin:auto;
            margin-top: 20px;
            width:200px;
            color:red;
            font-size:17px;
        }
    </style>
</head>
<header>
    <h1> Please Write your Name and Lastname 👽 </h1>
    <h4>And see what happens when you click 'Submit'</h4></heder>
</header>
<body>
    <div id='wrapper'>

        <form action='results.php' METHOD='POST'>      
            <div class='nameandinput'>
                <div class='name'>
                    Name
                </div> 
                <div class='input'>
                    <input type='text' name='name'>
                </div>
            </div>
            <div class='nameandinput'>
                <div class='name'>
                    Lastname
                </div> 
                <div class='input'>
                    <input type='text' name='lastname'>
                </div>
            </div>
            <input id="submit" type="submit" value="PRESS ME">
        </form>
        <div id="missinginfo">
                <?php 
                switch ($_SESSION["forgottname"]) {
                    case "förnamn":
                    echo "Du glömde förnamnet";
                    break;
                    case "efternamn":
                    echo "Du glömde efternamnet";
                    default:
                    echo "";
                }
                echo $_SESSION["forgottfirstname"]?>
                <?php echo $_SESSION["forgottlastname"]?>
        </div>
    </div>
</body>
</html>