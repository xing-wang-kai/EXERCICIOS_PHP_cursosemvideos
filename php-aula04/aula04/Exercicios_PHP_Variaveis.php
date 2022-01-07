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
        $nome = "jose"; #esta váriavel é do tipo string
        $idade = 23; #está varial é um número inteiro e real
        $salario = 1000.00; #está variavel é um número tipo float
        $empregado = true; #esta váriavel é um tipo booleano como falso
        echo "<h1>".$nome." está empregado e tem o salário de".number_format($salario, 2, ",", ".")." e possui $idade anos</h1>";
    ?>
</div>
</body>
</html>
 