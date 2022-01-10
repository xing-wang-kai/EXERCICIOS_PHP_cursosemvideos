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
     *Utilizando algumas funções básicas neste exercícios será realizado um teste
     * onde irei passar para o sistema um valor, e então quero que este valor faça referencia a variavo
     * neste caso farei duas possibilidade, uma que a função não retorna o valor da ariavel e só modifica
     * ele na função e então o segundo que ele retorna o valor da variavel
     **/
    function paramentros($a){
        $a += 2;
        echo "<p>agora o valor de a = $a</p>";
    }
    $a = 30;
    paramentros($a);
    echo "<p>o valor de a no sistema é de $a</p>";

    function paramentro02(&$a){
        $a += 2;
        echo "<p> Agora o valor de a na função é = $a </p>";
    }

    paramentro02($a);
    echo "<p> o valor de a no sistema agora é = $a </p>";

    ?>



</div>
</body>
</html>
 