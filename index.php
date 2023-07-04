<!--
Scrivi una funzione che accetti tre argomenti:
un array e due numeri ("a" più piccolo di "b" e "b" grande al massimo quanto il numero di elementi dell'array).

La funzione ritornerà un nuovo array con i valori che hanno la posizione compresa 
tra "a" e "b"
-->

<?php
    $theArray = [
        'Riccardo',
        'Federico',
        'Francesco',
        'Cosimo',
        'Gabriele'
    ];
    function create($array, $min, $max){
        $newArray = [];
        for($i=$min; $i<=$max; $i++){
            $newArray[]=$array[$i];
        }
        return $newArray;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    <h2>
        Non l'ho capito
    </h2>
    <?php var_dump(create($newArray, 5, 6)) ?>
</body>
</html>