<?php
session_start();
if(empty($_POST['name'])){
    header("location:register.php");
    $_SESSION["urllastname"] = $_SERVER['REQUEST_URI'];
    $_SESSION["forgottname"] = "förnamn";
}
if(empty($_POST['lastname'])){
    header("location:register.php");
    $_SESSION["urllastname"] = $_SERVER['REQUEST_URI'];
    $_SESSION["forgottname"] = "efternamn";
}
if(isset($_POST['name']) or isset($_POST['lastname'])){
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['lastname'] = $_POST['lastname'];
  }
  $name = $_SESSION['name'];
  $lastname = $_SESSION['lastname'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        header{
            text-align:center;
            }
    h1 {
        font-size: 5em;
        background-color: black;
        color: white;
    }

    a {
        background-color: #8B0000;
        color: white;
        font-size: 3em;
        text-decoration: none;
    }
    #destroy{
        margin-top:120px;
        width:250px;
        height:90px;
        font-size:40px;
        cursor: pointer;
        display: inline-block;   
    }
    #destroy:hover{
        background-color: #ddd;
        color: black;
    }
    #wrapper{
        text-align:center;
    }
    </style>
</head>
<header>
<?php echo "<h1>Welcome ".$name  . '  ' . $lastname.", Enjoy your stay!</h1>"; ?>
</header>
<body>

<div id="wrapper">
    <a href="sessiondestroy.php">
        <button id="destroy">Back 😎</button>
    </a>
</div>



</body>
</html>