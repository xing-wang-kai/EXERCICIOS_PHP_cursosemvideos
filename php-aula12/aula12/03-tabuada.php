<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
	h1 { font: 20pt Arial; }
  </style>
</head>
<body>
<div>
    <?php
    /**
     *SEU COMENTÁRIO::
     *ESTE TESTE USA O LAÇO DE REPETICAO FOR PARA GERAR A TABUADA, NESTE CASO ESTOU TESTANDO O USO DO LAÇO CONDICIONAL,
     * ESTE PROCESSO É DIFERENTE DO PYTHON UMA VEZ QUE DENTRO DO PARENTESE APÒS O FOR PRENCISO DECLAR O INICIO DA INTERAÇÃO
     * E SEU VALOR EM SEGUIDA DECLARAR A CONDIÇÃO PARA CONTINUIDADE DO LAÇO
     * E POR FIM DECLARAR O QUE ACONTECE APÓS O LACO TERMINAR QUE NO CASO SERIA ADICIONAR MAIS NUMEROS A INERAÇÂO
     * ISSO OCORRE ATE QUE A CONDIÇÂO SEJA REALIZADA.
     **/
       $n = isset($_GET["num"])?$_GET["num"]:1;
	   echo "<h1>Mostrando a Tabuada de $n </h1>";
	   for ($c = 1; $c <= 10; $c++) {
		 $r = $n * $c;
		 echo "$n x $c = $r <br/>";
	   }
    ?>
	<br/>
	<a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 