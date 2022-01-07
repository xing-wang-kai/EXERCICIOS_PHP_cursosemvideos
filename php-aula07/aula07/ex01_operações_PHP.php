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
        $n1 = $_GET["a"]; //passe um número inteiro no url para verificar a soma
        $n2 = $_GET["b"]; // passe um número inteiro no url para verificar a soma
        $op = $_GET["op"]; // deve ser passado o valor S de soma se não não terá efeito
        $soma = ($op == "s")?($n1+$n2):($n1*$n2); //se passar qualquer outro valor que não for S então o sistema fará uma multiplicação
        echo "os valores informados foram $n1 e o valor $n2 e então $soma";
    // média de alunos conforme os paamentros que foram passados.
        $nota_1 = 9;
        $nota_2 = 2;
        $media = ($nota_1 + $nota_2)/2;
        $teste = ($media > 6)?"aprovado":"Reprevoado";
        echo "a média do aluno foi $media com as notas $nota_1 e $nota_2 e o aluno está $teste";
    // teste com idade para identiica ou ou e
        $idade = 14;
        $vota = ($idade >= 18)&&($idade <= 65)?"VOTO OBRIGATÓRIO":"VOTO NÃO OBRIGATÓRIO";
        echo "Sua idade é de $idade e $vota";
    ?>
</div>
</body>
</html>
 