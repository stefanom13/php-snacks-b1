<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo
nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una
chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti
 “Accesso negato” -->
<?php 

$name = isset ($_GET['name']) ? $_GET['name'] : '' ;
$email = isset ($_GET['email']) ? $_GET['email'] : '' ;
$age = isset ($_GET['age']) ? $_GET['age'] : '' ;

// con isset controlliamo che i valori siano inseriti, altrimenti restituiamo stringa vuota.(operatore ternario)
// strlen - ottieni lunghezza della stringa
// strpos - trova elemento passato all'interno di una stringa
// is_numeric - trova se una variabile è un numero o una stringa numerica

if ( strlen($name) >= 3 && strpos($email, '.') && strpos($email, '@') && is_numeric($age) == true ) {
   echo "Accesso riuscito";
} else {
   echo "Accesso negato";
}
var_dump($name);
var_dump($email);
var_dump($age);
// var_dump($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
<body>
    
</body>
</html>