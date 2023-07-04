<!--
Scrivi una funzione che accetti tre argomenti:
un array e due numeri ("a" più piccolo di "b" e "b" grande al massimo quanto il numero di elementi dell'array).

La funzione ritornerà un nuovo array con i valori che hanno la posizione compresa 
tra "a" e "b"
-->

<?php
    function customArraySlice( $array, $minIndex, $maxIndex){

        if ((count($array) < $maxIndex ) || ($minIndex > $maxIndex)
           || ($minIndex < 0) ){
            return false;
        } else {
            $newArray = [];

            for ($i= $minIndex; $i < $maxIndex + 1 ; $i++) {
                $newArray[] = $array[$i];
            }

            return $newArray;
        }
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
    <?php var_dump(customArraySlice([1,2,3,4,5], 3, 4)); ?>
</body>
</html>