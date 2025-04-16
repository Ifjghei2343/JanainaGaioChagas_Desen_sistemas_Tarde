<?php 
    $estados = array("PR","SC","RS","SP","RJ","MG","BA","RN","AM");
    echo "ORIGINAL: ";
    print_r ($estados);
    echo "chr/>STROLOWER: Converte uma string para minúsculas<br/>";
    for ($i = 0; $i < count($estados); $i++) {
         $estados[$i] = strtolower($estados[$i]);
    }
    echo "STROLOWER: "; print_r ($estados);
    echo "<br/>SHIFT: Retira o primeiro elemento de um array<br/>";
    $rotaciona = array_shift($estados);
    echo "SHIFT: "; print_r ($estados);
    echo "<br/>POP: Extrai um elemento do final do array<br/>";
    array_pop($estados);
    echo "POP: "; print_r ($estados);
    echo "<br/>PUSH: Adiciona um ou mais elementos no final de um array<br/>";
    array_push($estados, "pr");
    echo "PUSH: "; print_r ($estados);
    echo "<br/>REVERSE: Retorna um array com os elementos na ordem inversa<br/>";
    $inverso = array_reverse($estados);
    echo "REVERSE: "; print_r ($inverso);
    echo "<br/>SORT: Ordena um array<br/>";
    sort($estados);
    echo "SORT: "; print_r ($estados);
    echo "<br/>SLICE: Extrai uma parcela de um array<br/>";
    $dividir = array_slice($estados, 1, 2);
    echo "SLICE: "; print_r ($dividir); echo "<br/>";
    ?>



    <?php
    echo "<br/>";
        $cores = array("Amarelo", "Vermelho","Verde","Azul");
        foreach($cores as $cor)
        {
               echo $cor. "</br>";
        }
        ?>



<?php
    echo "<br/>";
    $musicas = array (
    array ("Kid Abelha", "Amanhã",1993),
    array ("Ultrage A Rigor", "Pelados",1985),
    array ("Paralmas do Sucesso", "Alagados",1987));
    for ($linha=0; $linha<3;$linha++)
    {
      for ($coluna=0;$coluna<3;$coluna++)
    {
        echo $musicas[$linha][$coluna]." ! ";
    }
    echo "<br/>";
    }
    ?>



<?php
    echo "<br/>";
    $AmazonProducts = array(
    array("Código" => "Livro", "Descrição" => "Livros", "Preço" => 50),
    array("Código" => "DVDs", "Descrição" => "Filmes", "Preço" => 15),
    array("Código" => "CDs", "Descrição" => "Música", "Preço" => 20)
    );
    for ($linha = 0; $linha <3; $linha++) { ?>
    <p>  | <?= $AmazonProducts[$linha]["Código"] ?>
         | <?= $AmazonProducts[$linha]["Descrição"] ?>
         | <?= $AmazonProducts[$linha]["Preço"] ?>
    </p>
<?php
    }
?>




