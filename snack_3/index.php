<!-- 
    ## Snack 4
    Creare un array con 15 numeri casuali, 
    tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta 
-->

<?php

    $arrayNuber =[];
    
    while (count($arrayNuber) < 15){
        $number = rand(0,20);
        if(!in_array($number, $arrayNuber)){
            $arrayNuber[]=$number;
        }
    }
    var_dump($arrayNuber);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1></h1>
</body>
</html>