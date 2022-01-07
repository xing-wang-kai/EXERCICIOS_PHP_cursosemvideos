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
        $nome = isset($_GET["nome"])?$_GET["nome"]:"não foi informado";
        $ano = isset($_GET["ano"])?$_GET["ano"]:0;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"não informado";
        $idade = date("Y")-$ano;
        echo "o $nome nasceu em $ano e tem $idade é do sexo $sexo";
    ?>
    <a href="exercicio02.html" id="botão">VOLTAR</a>
</div>
</body>
</html>
 