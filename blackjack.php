<?php
session_start(); 
?>
//KAN TESTAT HÄR: http://antonpetersson.wieg17.se/blackjack/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>Black-Jack</title>
</head>
<body>

<?php
$cards = array(
    2,
    3,
    4, 
    5, 
    6, 
    7, 
    8, 
    9, 
    10, 
    10, 
    10, 
    10, 
    11
);



 function hitMe(){
     if($_SESSION['total'] < 21){
        global $cards; 
        array_push($_SESSION['playerCards'], $cards[mt_rand(0, sizeof($cards) - 1)]);
     }
}
function showCards(){
    echo '<div id="playerCards">';
    foreach($_SESSION['playerCards'] as $value){
        echo '<img src="./img/spade'.$value . '.jpg"> ';
    }
    $_SESSION['total'] = array_sum($_SESSION['playerCards']);
    echo "</br>";
    echo "<h2>Total: " . $_SESSION['total'] . "</h2>";
    echo '</div>';
}
 if ($_SESSION == null){
    $_SESSION['playerCards'] = array($cards[mt_rand(0, sizeof($cards) - 1)], $cards[mt_rand(0, sizeof($cards) - 1)]);
    showCards();

}
else if (isset($_POST['hitMe'])) {
    hitMe();
    showCards();

}
else if (isset($_POST['nuke'])) {
    session_unset(); 
    header("Refresh:0");

}
else if (isset($_POST['stop'])) {
    showCards();
    echo '<div id="messages"><h1>'; 
    if(array_sum($_SESSION['playerCards']) == 21 ){
        echo "Black Jack!!";
    }
    // else if(array_sum($_SESSION['playerCards']) > 21 ){
    //     echo "Du är tjock";
    // }
    else if(array_sum($_SESSION['playerCards']) < 21 ){
        echo "Du fick " . array_sum($_SESSION['playerCards']) . ", bra jobbat!";
    }
    echo '</h1></div>';
}
else{
    foreach($_SESSION['playerCards'] as $value){
        echo $value . "</br>";
    }
    echo "Total: " . array_sum($_SESSION['playerCards']);
}


if(array_sum($_SESSION['playerCards']) > 21 ){
    echo '<div id="messages"><h1>Du är tjock</h1></div>';
}

?>

<div id="buttonArea">
    <form action='' method='post'>
        <input type='submit' name='hitMe' value="Hit me!">
    </form>
    <form action='' method="post">
        <input type='submit' name='stop' value="Stanna">
    </form>

    <form action='' method="post">
        <input type='submit' name='nuke' value="Börja om">
    </form>
</div>

<?php   





?>
    
</body>
</html>