<!-- 
    ## Snack 1
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
    Stampiamo a schermo tutte le partite con questo schema.
    
    Olimpia Milano - Cantù | 55-60
 -->


<?php

    $partiteGiocate = [
        ['squadraCasa' => 'gli isotopi',
        'squadraOspite' => 'raptors',
        'puntiSqCasa' => 65,
        'puntiSqOspite' => 45
    ],
    [
        'squadraCasa' => 'prova',
        'squadraOspite' => 'riprova',
        'puntiSqCasa' => 45,
        'puntiSqOspite' => 55
    ]]
    ;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabellone</title>
</head>
<body>

<h1>primo girone</h1>

<?php for ($i = 0; $i < count($partiteGiocate); $i++) { ?>

    <table>
        <th><?php echo $partiteGiocate[$i]["squadraCasa"] ?></th><th><?php echo $partiteGiocate[$i]["squadraOspite"] ?></th>
        <td><?php echo $partiteGiocate[$i]["puntiSqCasa"] ?></td><td><?php echo $partiteGiocate[$i]["puntiSqOspite"] ?></td>
    </table>
   
<?php } ?>




    
</body>
</html>