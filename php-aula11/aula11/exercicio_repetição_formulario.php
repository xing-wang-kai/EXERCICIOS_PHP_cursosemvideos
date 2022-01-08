<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="gest" action="exercicio_repetição_formulario_02.php">
    <?php

        $c = 1;
        while ($c <= 5){
            echo "Valor_$c: <input type='number' min='1' max='9' name='$c' required=''/></br>";
            $c++;
        }

    ?>
        <input type="submit" class="button" value="SUBMETER">
    </form>

</div>
</body>
</html>
 