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
     *NESTE PROCDIMENTO SERA USADO OS METHODOS DE FUNCÕES PARA CRIAR DETERMINADA FUNCÕES
     * ESTAS FUNÇÔS SERÃO INVOCADAS PARA SEREM IMPLEMENTADAS EM CÓDIGOS E SOLCIONAR ALGUNS PROBLEMAS
     **/

    function soma($a, $b){
        $s = $a + $b;
        echo " a soma de $a e $b é igual á: $s </br>";
    }

    soma(3, 5);
    soma(4, 6);

    function soma2(){
        $p = func_get_args(); //joga todos valores para uma arry e armazena
        $tot = func_num_args(); //calcula todos valoraes armazenados
        $s = 0;
        for ($i = 0; $i < $tot; $i++){
            $s += $p[$i];

        }
        return $s;}

    $var = soma2(4, 5, 6, 7, 8, 9, 9);
    echo "a somas de todos valores informados foi $var</br>";
    ?>
</div>
</body>
</html>
 