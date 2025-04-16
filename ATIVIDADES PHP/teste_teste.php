<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo12</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
        }
        th, td {
            border-style: solid;
            width: 100px;
            float: right;
        }
        </style>
</head>
<body>

<h1> Janaina Gaio Chagas </h1>
        <table>
        <?php
            for ($I=1;$I<=10;$I++)
            {
              echo "<tr>";

              for ($c=1; $c<=10;$c++) {
      
            $resultado = $I * $c;

            
              echo "<td> $I x $c = $resultado </td>";
            }
            echo "<tr/>";
        }
        ?>
        </table>
</body>
</html>