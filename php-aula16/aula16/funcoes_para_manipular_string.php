<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../../php-aula15/aula15/_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    /**
     *SEU COMENTÁRIO::
     * para usar o print f podeos informar
     * $d = valor negativos e positivos
     * $u = valores sometne positivos
     * $s = informa uma string
     * $f = informar um valor float
     **/

    $alimento = "leite";
    $precos = 10.40;
    printf ("o valor do %s é igual a %.2f", $alimento, $precos);

     /**
     *SEU COMENTÁRIO::
     * print-r retorna o valores do array;
     * var_dump
     * var_export
     **/

    $x[0] = 1;
    $x[1] = 2;
    $x[2] = 3;

    echo "<br></br>";

    print_r($x);

    echo "<br></br>";
    $x2 = array(1, 2, 3);
    print_r($x2);

     /**
     *WORDWRAP
     * cria quebra de linha dentro dos códigos
     * esta função só quebra o código dentro do php gerado
     **/
    $str = "aqui temos um texto gigante criado em php que ira mostrar um teste básico usando a função wordwrap()";
    //wordwrap($str, 8);// quebra o texto em até 8 caracteres no código font
    $str = wordwrap($str, 20, "</br>", false); // neste outro exemplo ele vai quebrar a linha dentro do html o utlimo argumento em palavras mais de 20 letras não gera a qubra
    echo "$str"
    /**
     *strlen()
     * calcula o tamanho de uma string basta adicionar a string dentro das ()
     **/

     /**
     *trim()
     * Apaga os spaços adicionados a mais na string.
     * ltrim = elimina os espaços de left
     * rtrim = elimina os espaços de right
     *
     **/

     /**
     * str_word_count(fraze, 1)
     * conta as palavras dentro de uma string
     * se no segundo argumento colocar zero gera a qtd de palavras
     * se no segundo argumento colocar um então gera um array
     * se no segundo argumento colocar um posicionamento dentro do array
     **/

     /**
     *EXPLODE(caracter, fraze)
     * Na primeiro parametro idica a partir de qual caracter ele vai quebrar o texto e gerar um array
     * o segundo é a fraze que será explodida
     **/

     /**
     *str_split()
     * cria um array com letras.
     **/

     /**
     *implode(caracter, array) ou join(caracter, array)
     * gera o caracter que vai está entre os dados do array;
     * segundo do argumento é o array gerado que vai ser juntado e virar uma fraze
     **/

     /**
     *chr(): Retorna o valor de uma letra dentro de um código 67
     **/


    /**
     *ord()
     **/


    /**
     *strtolower() transforma tudo em letras minusculas
     **/

    /**
     *strtoupper() transforma tudo em letras minusculas
     **/

    /**
     *ucfrist()
     * transforma a primeira letra da fraze em maiuscula. mas não muda as outras letras
     **/

    /**
     *ucwords()
     * cada uma das palavras dentro de uma fraze fica em maiuscula
     **/

    /**
     *strrev()
     * coloca uma string de tras para frente
     **/

      /**
     *strpos(string, palavra)
        * localiza a posição de uma palvra em uma string
    **/

    /**
     *stripos(string, palavra)
     * faz a mesma coisa mais ignora a caixa alta ou baixa
     **/

    /**
     *substr_count(string, palavra)
     * conta quanta vezes a palavra conta dentro da string
     **/

    /**
     *substr(string, primeroarg, segundoarg)
     * cria ua substring localizando de primeiroarg até o segundoarg
     **/
    /**
     *str_pad(string, qtdcaracteres, valornoespaçosextras, direação)
     * cEste metodo faz uma string caber dentro de uma qtd de caracteres
     * no valor um colocamos a string
     * no valor dois acrescenta a qtd de caracteres que queremos a strings
     * no valor três acrescenta se queremos espaço entre os campos que ficar vazios ou simbolos
     * no valor quatro informos a direção dos espaços extras como STR_PAD_RIGHT ou STR_PAD_LEFT ou STR_PAD_CENTER
     **/

    /**
     *str_repeat(string, 5)
     * Repete a palavras da strings
     **/

    /**
     *str_replace(palavra1 , porpalavra2, string)
     * str_ireplace ignora o tipos de maiusculo e minusculos.
     * troca a palavra1 por palavra 2 na string
     **/


    ?>
</div>
</body>
</html>
 