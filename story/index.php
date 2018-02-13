<?php

$adjektiv = array("stora","lilla","fina","fula","hiskeligt","otroligt","abnorma","runda","värdelösa","älskade","aerodynamiska","superkalla","galna","psykotiska","läskiga","osunda");
$substantiv = array("bollen","hockeypucken","flickan","pojken","kvinnan","mannen","getingen","hunden","fågelskrämman","raketen","Elon Musk","JockiBoi","Viktor","musen","Martin","gamern","lusen","imbecillen");
$verb = array("som cyklade hela vägen till ica","som vandrade på månen","som flög över atlanten","som gameade hela natten","som spelade fotboll","som djupdök i bollhavet","som kastade sig ut över stupet","som sprang jorden runt","som kissade i motvind","som svalde hela kotten");
$bonus = array("helt naken","med Viktor vid sin sida","varje dag för resten av sitt liv","24/7 now and forever","medans hen spelade trumpet"," men glömde varför","men ville egentligen bara bädda ner sig"," och förövrigt var väldsmästare i just det"," men ville allra helst bara äta en semla","otroligt fort men slarvigt","med sin silvriga enhörning vid sin sida","i rymden, på månen med blicken över jorden","under ytan var hen egentligen rädd","i sinom tid med goda resultat");


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Storymode on!!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>
    body{
        text-align: center;
        padding-top: 5%;
        background-color:black;
        color:white;

    }
    #story{
        margin: 0 auto;
        text-align: center;
        height: 200px;
        width: 400px;
        background-color: white;
        color: black;
        padding: 5%;
        font-size: 200%;
        font-family: Georgia, serif;


    }
    </style>
</head>
<body>

    <h1>Välkommen till sagostund med Martin och Jesper</h1>
    <h4>Välj namn/thing or leave empty to make it random!</h4>
   <form method="post">
   <input type="text" class="text" name="name" value="" /><br><br>
   <input type="submit" class="button" name="insert" value="Starta sagan" />
   </form>
    <br>
    <br>
    <div id="story">
    
    <?php
    
function adjektiv($adjektiv){

    $randAdj = $adjektiv[RAND(0, count($adjektiv)-1)];

    return $randAdj;
}

function verb($verb){

    $randVer = $verb[RAND(0, count($verb)-1)];

    return $randVer;

}

function substantiv($substantiv){

    $substantiv[RAND(0, count($substantiv)-1)];

    return $randSub;

}

function bonus($bonus){

    $randBon = $bonus[RAND(0, count($bonus)-1)];


    return $randBon;
}




function createStory($adjektiv,$substantiv,$verb,$bonus){
   
   
    if (isset($_POST["name"]) and count($_POST["name"]) > 0) {
        $result = $_POST["name"];
        
    }
    
    else{
        
        $result = substantiv($substantiv);
    }
    
   

echo "En gång för länge sedan fanns den " . adjektiv($adjektiv) .", ". adjektiv($adjektiv) ." och ". adjektiv($adjektiv) . " " . $result . " " . verb($verb) . " " . bonus($bonus)."." ;

}


if (isset($_POST["insert"])){
    createStory($adjektiv,$substantiv,$verb,$bonus);
}

?>
    
    </div>


    
</body>
</html>