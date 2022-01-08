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
    $v = 1;
    while ($v <= 5){
        $$v = $v;
        echo "você escolheu o valor: $v</br>";
        $v++;
    }

        
    ?>
</div>
</body>
</html>
 