

<?php 

    $semlor = array("Semla"=>"Klassiska semlan med grädde, mandelmassa och bröd.", 
    "Fettisdagsbulle"=>"Nu kör vi stort! denna semlan innehåller nutella, grädde och bröd",
    "Spicy"=>"Pasta, grädde, tomat, ketchup",
    "Semmeltårta"=>"Semlor till alla: Ingredienser 50g, 2dl mjölk, 650g vetemjöl, 2 ägg, 1dl socker, 1msk bakpulver");


    foreach($semlor as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
        echo "<img src=semla.jpg>";
        echo "<br>";
    }

    /*
    foreach($fettis as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    */

?>