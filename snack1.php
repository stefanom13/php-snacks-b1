<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà
una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra
ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano- Cantù | 55-60 -->

<?php 

$match =[
    [
    'casa' => 'basket lamezia',
    'ospite' => 'basket rende',
    'puntiCasa' => 78,
    'puntiOspite' => 72,
    ],
    [
    'casa' => 'basket sassari',
    'ospite' => 'basket cagliari',
    'puntiCasa' => 64,
    'puntiOspite' => 82,
    ],
    [
    'casa' => 'basket cremona',
    'ospite' => 'basket vigevano',
    'puntiCasa' => 77,
    'puntiOspite' => 78,
    ],
    [
    'casa' => 'basket terni',
    'ospite' => 'basket carpi',
    'puntiCasa' => 84,
    'puntiOspite' => 73,
    ],
]
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>
<body>
    
    <?php 
     for($i = 0; $i < count($match); $i++){
       echo $match[$i]['casa'] .' - ' .$match[$i]['ospite'] ." = " .$match[$i]['puntiCasa'] ." - " .$match[$i]['puntiOspite']." || ";
        }
    ?>

</body>
</html>