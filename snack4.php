<!-- Creare un array con 15 numeri casuali,  
tenendo conto che l’array non dovrà contenere lo stesso
numero più di una volta -->
<?php  
  $numeri = [];

  while (count($numeri) < 15) {
    $numeri_random = rand(1, 50);
    if(!in_array($numeri_random, $numeri)){
      $numeri[] = $numeri_random;
    }
  }

  var_dump($numeri)
?> 

<!-- rand (1,50) genera numeri random da 1 a 50 -->
<!-- in array controlla se il valore esiste o meno -->