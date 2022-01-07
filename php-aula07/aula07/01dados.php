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
        $valor = $_GET["v"];
        echo "valor enviado foi $valor e a raiz quadra dele é:  ".number_format(sqrt($valor), 2);

    ?>
    <a href="exercicios_08.php">voltar</a>
</div>
</body>
</html>
 