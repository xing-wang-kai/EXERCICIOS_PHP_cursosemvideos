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
    //teste de operadores, adicionado -- e ++ nos operadores de número estc
        $preco = 100.00;
        $desconto = $preco-($preco*10/100);
        $ano = 2022;
        echo "o preço do produto no ano passado foi ".--$ano." R$".number_format($preco, 2, ",", "."). "e o valor com desconto este ano é ".++$ano." é R$". number_format($desconto, 2, ",", ".");
    ?>
</div>
</body>
</html>
 