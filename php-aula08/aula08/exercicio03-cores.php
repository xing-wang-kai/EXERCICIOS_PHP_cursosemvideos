<!DOCTYPE html>
<html>
<head>
    <?php
    $t = isset($_GET["t"]) ? $_GET["t"] : "não foi information" ;
    $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
    $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#333";

    ?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
<div>
    <?php
        echo "<span class='texto'>$t</span>"
    ?>
</div>
</body>
</html>
 