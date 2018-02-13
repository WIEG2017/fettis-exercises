<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />

</head>
<body>
    <?php 
        echo $_SERVER['REMOTE_ADDR'];
        echo $_SERVER['HTTP_CLIENT_IP'];
        echo $_SERVER['HTTP_X_FORWARDED_FOR'];
    ?>



</body>
</html>