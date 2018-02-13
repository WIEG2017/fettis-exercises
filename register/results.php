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

print_r($_POST['name']);
print_r($_POST['lastname']);

if(isset($_POST['name']) or isset($_POST['lastname'])){
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['lastname'] = $_POST['lastname'];
}
echo "<br/>";
echo '<a href="register.php">back</a>';

?>



</body>
</html>