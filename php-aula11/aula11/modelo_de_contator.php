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
        $inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 1;
        $final = isset($_GET["final"]) ? $_GET["final"]: 5;
        $pulo = isset($_GET["pulos"]) ? $_GET["pulos"] : 1;

        if ($inicio > $final){
            while ($inicio > $final){
                echo "→$inicio</br>";
                $inicio -= $pulo;
            }
        }
        else{
            while ($inicio < $final){
                echo "→$inicio</br>";
                $inicio += $pulo;
            }
        }
    ?>
</div>
</body>
</html>
 