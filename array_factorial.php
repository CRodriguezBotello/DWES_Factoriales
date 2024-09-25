<?php
    require_once 'calcular_factorial.php';
    // Guardar en el array los factoriales del 1 al 10
    for($j=0; $j<=10; $j++){
        $factorial[$j]=calcular_factorial($j);
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="array_factorial.css">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th colspan="2">Factorial en Array</th>
        </tr>
        <?php
            // Mostrar los valores del array en una tabla de forma dinamica
            for($i=0; $i<count($factorial); $i++){
                echo '<tr><td>'."Factorial[$i]".'</td><td>'."$factorial[$i]".'</td></tr>';
            }
        ?>
    </table>
</body>
</html>