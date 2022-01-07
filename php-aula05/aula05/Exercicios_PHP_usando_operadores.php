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
    /*esté é o exercioio realizado dia 07.01.2021 referente ao curso em vídeo do gustavo guanabara, esse exercicio é usando alguns operadores aritimeticos para teste.*/
    $a = $_GET["a"];
    $b = $_GET["b"];
    $soma = $a + $b;
    $reduzir= $a - $b;
    $exponenciar = pow($a, $b);
    $dividir = $a / $b;
    $multiplicar = $a * $b;
    $raiz = sqrt($a);
    echo "os valores passados foram $a e $b </br> a soma é: $soma </br> a redução é: $reduzir </br> a exponeciação é $exponenciar </br> a divizão é $dividir </br> a multiplicação é $multiplicar </br> a raiz é $raiz </br>";
        
    ?>
</div>
</body>
</html>
 