<!-- Creare una variabile con un paragrafo di
testo.
Visualizzare a schermo il paragrafo con la
relative lunghezza e sostituire la
badword passata in GET con tre *. -->


<?php
  $text= "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Paragrafo originale</h1>
  <p><?php echo $text; ?></p>
  <h2>Paragrafo modificato</h2>
  <p><?php echo str_replace("et","***" ,$text); ?></p>
  <p>Lunghezza del paragrafo:n° caratteri <?php echo strlen($text); ?></p>
</body>
</html>
