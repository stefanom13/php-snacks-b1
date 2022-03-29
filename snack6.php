<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. 

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

Stampiamo il nostro array mettendo gli
insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack6</title>
  <link rel="stylesheet" href="style6.css">
</head>
<body>
  <?php
  for ($i = 0; $i<count($db['teachers']); $i++){
    ?>
    <div class="grey"><?php echo $db['teachers'][$i]['name'];?> -
    <?php echo $db['teachers'][$i]['lastname'];?></div>
    <?php
  }
  ?>  
  <hr>
  <?php
  for ($i = 0; $i<count($db['pm']); $i++){
    ?>
    <div class="red"><?php echo $db['pm'][$i]['name'];?> -
    <?php echo $db['pm'][$i]['lastname'];?></div>
    <?php
  }
  ?>  
</body>
</html> 