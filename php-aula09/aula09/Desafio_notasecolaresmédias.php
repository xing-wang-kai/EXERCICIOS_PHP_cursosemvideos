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

    $nome = isset($_GET["nome"]) ? $_GET["nome"] : "NOME NÃO INFORMADO";
    $nota01 = isset($_GET["nota01"]) ? $_GET["nota01"]: "0";
    $nota02 = isset($_GET["nota02"]) ? $_GET["nota02"]: "0";
    $media = ($nota01 + $nota02)/2;
    echo $nota01;
    echo $nota02;

    if ($media <= 5){
        echo "As notas $nota01 e $nota02 fornecem a média $media do $nome foi REPROVADO</br>";
    }
    elseif ($media > 5 && $media < 7){
        echo "As notas $nota01 e $nota02 fornecem a média $media $nome está em recuperação</br>";
    }
    else {
        echo "As notas $nota01 e $nota02 fornecem a média $media $nome foi APROVADO</br>";
    }
        
    ?>
</div>
</body>
</html>
 