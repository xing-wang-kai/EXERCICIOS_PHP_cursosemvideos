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
     * Separando um arquivo como funcoes.php e então direcionando o include para adicionar a função a este chamado.
     * EXITE ARQUIVOS INCLUDE E REQUIRE
     * CASO O ARQUIVO SEJA CORROMPINDO ELE TENTA ENCONTRAR NO INCLUDE JÁ NO REQUIRE ELE INTERROMPE O PROCESSO>
     * TAMBÉM EXISTE O INCLUDE_ONCE E REQUIRE_ONCE:
     * SE JA CARREGOU A FUNÇÃO ELE SÓ VAI CARREGAR O MESMO UMA VEZ
     **/
    include "funcao.php";
        ola();
        $a = 400;
        mostra_numero($a);

    ?>
</div>
</body>
</html>
 