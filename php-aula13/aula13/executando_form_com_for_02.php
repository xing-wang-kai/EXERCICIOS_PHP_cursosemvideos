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
    /**
     *SEU COMENTÁRIO::
     *NESTE EXERCICIO SERA USADO O TERCEIRO METODO DE REPETIÇÃO, O PRIMERIO ESTUDADO FOI O WHILE
     * DEPOIS ESTUDADO O DO WHILE E POR FIM O FOR COM CONTADORES
     * O FOR APRESENTA TRÊS PARAMENTROS EM SUA ESTRUTURA<
     * < O PRIMEIRO INSERIMOS UMA VARIAVEL E UM VALOR
     * < NO SEGUNDO INSERIMOS A CONDIÇÃO PARA A CONTINUIDADE DO FOR
     * < NO TERCEIRO INSERIMOS UM ENCREMENTO A VARIAVEL QUE VAI OCORRER ATE QUE CONIÇÂO SEJA VERDADEIRA.
     **/
    $nun = isset($_GET["num"]) ? $_GET["num"]: 1;

    for ($c = 1; $c <= 10; $c++) {
        echo " $nun X $c =" . $nun * $c . "</br>";
    }

    ?>
    </br><a href="javascript:history.go(-1)" class="botao"> VOLTAR </a>
</div>
</body>
</html>
 