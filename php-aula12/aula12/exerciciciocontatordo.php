<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    $contador = 1;
    do {
        echo "-- $contador";
        $contador ++;
    } while ($contador <= 5);
        
    ?>
</div>
</body>
</html>
 