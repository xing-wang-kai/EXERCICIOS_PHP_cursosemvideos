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
        $nun = isset($_GET["nun"]) ? $_GET["nun"]: 0;
        $o = isset($_GET["oper"]) ? $_GET["oper"]: 1;
        $r = 1;
        switch ($o){
            case 1:
                $r = $nun * 2;
                break;
            case 2:
                $r = $nun ^ 3;
                break;
            case 3:
                $r = sqrt($nun);
    }
        echo "o resultado da operação realizada é $r";
    ?>
</div>
</body>
</html>
 