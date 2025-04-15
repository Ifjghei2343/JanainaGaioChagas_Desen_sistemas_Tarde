<?php 
    //Declara variável numérica
    $unidade = 91;
    //Testa se $unidade maior que 90. Retorna um boolean
    $vaiChover = ($unidade > 90);
    //Testa se $vaiChover é verdadeiro
    if ($vaiChover)
    {
        echo "Vai chover com toda certeza absoluta da terra!";
    }
        ?>


 
<?php
    $s = "lampada"
    switch ($s) (
     case "casa":
        print "A casa é amarela";
        break;
        case "arvore":
        print "a árvore é bonita";
        break;
     case "lampada":
        print "joao apagou a lampada";
        break;
     default;
        print "você não selecionou";
        break;
    )
    ?>