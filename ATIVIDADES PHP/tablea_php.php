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
            width: 50px;
        }
        </style>
</head>
<body>
        <table>
        <?php
            for ($I=1;$I<=5;$I++)
            {
              echo "<tr>";
              for ($c=1; $c<=20;$c++)
            {
              echo "<td> $1,$c </td>";
            }
            echo "<tr/>";
        }
        ?>
        </table>
</body>
</html>