
<?php $nameOfSite = "Grid with numbers" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $nameOfSite ?></title>
    <style>
    body{
        background-color:black;
        color:white;
    }
    </style>
</head>
<body>
    
</body>
</html>

<h1><?php echo $nameOfSite ?></h1>

<?php

$numbers = array(
    createRow(),
    createRow(),
    createRow(),
    createRow(),
    createRow(),
    createRow(),
    createRow(),
    createRow()
);

function createNumber(){
    return rand(1,8);
}

function createRow(){
    return array(createNumber(), createNumber(), createNumber(), createNumber(),createNumber(), createNumber(), createNumber(), createNumber() );
}

?>

<table>

<?php

for($h = 0; $h < count($numbers); $h++){ 
    echo '<tr>';
    $row = $numbers[$h];
    
    for($v = 0; $v < count($row); $v++) {
        $number = $row[$v];
    echo '<td>'. $number.'</td>';
    }
    echo '</tr>'; 
}

?>
</table>


