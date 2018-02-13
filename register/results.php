<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>

<?php


if(isset($_POST['name']) or isset($_POST['lastname'])){
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['lastname'] = $_POST['lastname'];
}
$name = $_SESSION['name'];
$lastname = $_SESSION['lastname'];

echo "<h1>hej ".$name . $lastname."</h1>";
echo "<br/>";
echo '<a href="register.php">back</a>';

?>



</body>
</html>