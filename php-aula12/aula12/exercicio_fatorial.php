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
    $f = isset($_GET["f"]) ? $_GET["f"] : 1;
    $contador = $f;
    $fat = 1;
    do{
        $fat = $fat * $contador;
        echo " $fat x $contador = ";
        $contador--;


    } while($contador >= 1);
        echo "total: $fat";
    ?>
</div>
</body>
</html>
 