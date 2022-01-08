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
        $ano = isset($_GET["ano"])?$_GET["ano"]: date("Y");
        $data_atual = date("Y");
        $idade = $data_atual - $ano;
    if(($idade >= 18) && ($idade <= 65)) {
        echo "você já tem $idade e já pode votar</br>";
        echo "voce já tem $idade e já pode tirar a carteira de motorista</br>";
    }
    elseif($idade>=16 && $idade < 18) {
        echo "você tem $idade não precisa votar o voto é opcional</br>";
        echo "você ainda não pode dirigir</br>";
    }
    else{
        echo "Você tem $idade e ainda não pode votar </br>";
        echo "você tem $idade e ainda não pode dirigir</br>";
    }
    ?>
    <a href="exerciciodecondiçoesIF.html" class="button">VOLTAR</a>
</div>
</body>
</html>
 