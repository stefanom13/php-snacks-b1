<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e
suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
<?php

    // Prendere un testo abbastanza lungo, contenente diverse frasi. 
    // Prendere il testo e suddividerlo in tanti paragrafi ogni volta in cui si incontrerà un punto.

    $paragrafo = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum";

       // explode - divide una stringa per una stringa

    $paragrafoArray = explode('.', $paragrafo);

    
    var_dump($paragrafo);
    var_dump($paragrafoArray);


?>