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
     *
     **/
    $a=10;
    $b=2;
    $j=$a/2;
    for ($i=0;$i<$j;$i++){
        if ($i % $b == 1)
            echo "$i";
    }

    function f($v, $n) {
        if ($n <= 0) return 1;
        else
            return $v[$n-1] * f($v, $n-2) + 1;
    }
    $a = array(0,1,2,3);
    print (f($a, 4));

    ?>
</div>
</body>
</html>
 