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
        $raiz = sqrt($valor);

        echo "A raiz quadrada do número informado $valor é o valor de $raiz";

    ?>
    <a href="exercicio01-ligandoformulariohtmlparaphp.html" class="botão">VOLTAR</a>
</div>
</body>
</html>
 