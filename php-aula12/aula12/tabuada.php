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
     *Este EXERCICIO FAZ O USO DE DO WHILE PARA FAZER UM TESTE CONTINUO, LEMBRANDO QUE ESTA OPEAÇÂO O PRIMEIRO CÓDIGO SEMPRE SERÀ EXECUTADO
     * MESMO QUE O RETORNO SEJA FALDO NA PRIMEIRA INSTANCIA, DIFERENE DO WHILE PURO QUE O CÓDIGO SO INICIA A REPETIÇÃO SE A PRIMEIRA CONDIÇÂO
     * FOR VERDADEIRA
     **/
        $tabuada = isset($_GET["t"]) ? $_GET["t"] : 1;
        $contador = 1;

        do {
            $resultado = ($tabuada*$contador);
            echo "$tabuada x $contador = $resultado </br>";
            $contador ++;
        } while ($contador <= 10);
    ?>
    </br><a href="tabuada.html" class="botao">VOLTAR</a>
</div>
</body>
</html>
 