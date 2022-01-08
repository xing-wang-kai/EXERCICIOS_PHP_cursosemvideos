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
        $tabuada = isset($_GET["t"]) ? $_GET["t"] : 1;
        $contador = 1;

        do {
            $resultado = ($tabuada*$contador);
            echo "$tabuada x $contador = $resultado </br>";
            $contador ++;
        } while ($contador <= 10);
    ?>
    </br><a href="tabuada.html" class="botao">VOLTAR</a>
</div>
</body>
</html>
 