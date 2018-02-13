<?php
session_start(); 

$cards = array(
    2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10, 10, 11
);



 function hitMe(){
     $cards = array(
         2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10, 10, 11
     );
     array_push($_SESSION['playerCards'], $cards[mt_rand(0, sizeof($cards) - 1)]);

}

 if ($_SESSION == null){
    $_SESSION['playerCards'] = array($cards[mt_rand(0, sizeof($cards) - 1)], $cards[mt_rand(0, sizeof($cards) - 1)]);

    foreach($_SESSION['playerCards'] as $value){
        echo $value . "</br>";
    }
    echo "Total: " . array_sum($_SESSION['playerCards']);
    

}
else if (isset($_POST['hitMe'])) {
    hitMe();

    foreach($_SESSION['playerCards'] as $value){
        echo $value . "</br>";
    }
    echo "Total: " . array_sum($_SESSION['playerCards']);

}
else if (isset($_POST['nuke'])) {
    session_unset(); 
    header("Refresh:0");


}
else{
    foreach($_SESSION['playerCards'] as $value){
        echo $value . "</br>";
    }
    echo "Total: " . array_sum($_SESSION['playerCards']);
}













?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Black-Jack</title>
</head>
<body>




<form action='' method='post'>
    <input type='submit' name='hitMe' value="Hit me!">
</form>

<form action='' method="post">
    <input type='submit' name='nuke' value="Börja om">
</form>


<?php   

// if(array_sum($_SESSION['playerCards'] >= 21 ){
//     echo "Du är tjock";
// }



?>
    
</body>
</html>