<!doctype HTML>
<html>
<head>
<title>Fibonacci</title>
</head>
<body>
<h1>Fibonacci</h1>
<br/>
<form action="./index.php" method="get">
<h2>please choose your number</h2>
<br/>
<input type="number" name="num" min="1" max="200">
<br/>
<br/>
<input type="submit" value="submit">
</form> 
<?php
$choosenNum = $_GET['num'];
function fibonacci($choosenNum){
        if ($choosenNum < 0) {
            return NULL;
        } elseif ($choosenNum === 0) {
            return 0;
        } elseif ($choosenNum === 1 || $choosenNum === 2) {
            return 1;
        } else {
            return fibonacci($choosenNum-1) + fibonacci($choosenNum-2);
        }	 
}
$a =fibonacci($choosenNum);
echo "<h3> the answer is : $a </h3>"

?>
</body>
</html>