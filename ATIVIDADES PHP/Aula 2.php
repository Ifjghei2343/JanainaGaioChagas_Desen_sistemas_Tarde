<html>
    <body>
        <?php 
            //Função usada para de finir fuso horário padrão
            date_default_timezone_set('America/Los_Angeles');
            //Manipulando HTML e PHP
            $data_hoje = date ("d/m/Y", time());
            ?>
            <p align="center"> Hoje é dia <?php echo $data_hoje; ?>




    <?php
         echo "texto <br>";
         echo "Olá Mundo <br>";
         echo "Isso abrange
         várias linhas. As novas linhas serão saída também. <br>";
         echo "Isso abrange\multiplas linhas. A nova linha será \na saída também. <br>";
         echo "Caracteres Escaping são feitos \"Como esse\". <br>";
         echo "<br>";
         ?>     



       <?php 
           echo "<br>";
           $comida_favorita = "Italiana";
           print $comida_favorita[2];
           echo " ";
           $comida_favorita = "Cozinha". $comida_favorita;
           print $comida_favorita;
           ?>


            




</p>
</body>
</html