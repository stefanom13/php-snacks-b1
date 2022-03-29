<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo
nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una
chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti
 “Accesso negato” -->
<?php 

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

// strlen - ottieni lunghezza della stringa
// strpos - trova elemento passato all'interno di una stringa
// is_numeric - trova se una variabile è un numero o una stringa numerica

if ( strlen($name) >= 3 && strpos($email, '.') && strpos($email, '@') && is_numeric($age) == true ) {
    $result = "Accesso riuscito";
} else {
    $result = "Accesso negato";
}

var_dump($result);


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