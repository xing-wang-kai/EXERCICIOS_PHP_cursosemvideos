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
    for ($c = 0; $c <= 10; $c++){
        echo " --> $c";
    };
    echo "</br></br>";
    for ($d = 10; $d >= 0; $d--){
        echo " --> $d";
    }
    ?>
</div>
</body>
</html>
 