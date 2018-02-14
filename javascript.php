<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Javascript</title>
    <style>
        h1 {
            text-align: center;
            margin-top: 100px;
            text-transform: uppercase;
        }
        form {
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgba(211, 211, 211, 0.7);
            width: 350px;
            height: 250px;
        }
        input {
            width: 300px;
            height: 30px;
            margin: 10px;
        }
        button {
            width: 200px;
            height: 35px;
            margin: auto;
            border: none;
            background-color: #155E70;
            color: white;
            font-family: times;
            text-transform: uppercase;
            font-size: 12px;
        }
        body {
            background-image:url(bild.jpg);
            background-size: cover;
        }
        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<h1> Välkommen</h1> 
<div class="wrapper">
    <form method="POST" action="./javascript.php">
        <input type="text" placeholder=" Namn" name="name"/>
        <input type="text" placeholder=" Ålder" name="age"/>
        <input type="text" placeholder=" Favoritmånad" name="month"/>
        <button type="submit">Skicka formuläret</button>
    </form> 

    <?php   
        $name = $_POST['name'];
        $age = $_POST['age'];
        $month = $_POST['month'];

        //kollar först om variabeln is set, kollar sedan så att variabeln har data i sig med empty. 

        if(isset($name, $age, $month) && !empty($name) && !empty($age) && !empty($month)){
            echo "<script type='text/javascript'>alert('Namn: $name Ålder: $age Favoritmånad: $month');</script>";
        }
        else {
            echo "<script type='text/javascript'>alert('Fyll i hela formuläret innan du trycker på skicka!');</script>";
        }

 ?>
 </div>
</body>
</html>
