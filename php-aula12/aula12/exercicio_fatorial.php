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
     * NESTE CASO ESTOU REALIZADO ALGUNS TESTES USANDO A CODICIONAL DO WHILE PARA GERAR UM CONTADOR. LEMBRANDO QUE A DO WHILE
     * DIFERENTE DO WHILE SEMPRE VAI INICIAR O PRIMEIRO CODIGO INDEPENDENTE SE A CONDIÇÃO FOR VERDADEIRA OU FALSA
     **/

    $f = isset($_GET["f"]) ? $_GET["f"] : 1;
    $contador = $f;
    $fat = 1;
    do{
        $fat = $fat * $contador;
        echo " $fat x $contador = ";
        $contador--;


    } while($contador >= 1);
        echo "total: $fat";
    ?>
</div>
</body>
</html>
 