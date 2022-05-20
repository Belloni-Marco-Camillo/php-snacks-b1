<!-- ## Snack 2 
    Passare come parametri GET name, mail e age  
    verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri
    che mail contenga un punto e una chiocciola
    che age sia un numero. 
    Se tutto è ok stampare “Accesso riuscito” 
    altrimenti “Accesso negato” 
-->

<?php

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    $primeCondition = false;
    $secondCondition = false;
    $terzaCondition = false;

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

    

    <form action="index.php" method="get">
        <label for="name">inserisci nome:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="mail">inserisci mail:</label><br>
        <input type="text" id="mail" name="mail"><br>
        <label for="age">inserisci age:</label><br>
        <input type="text" id="age" name="age"><br>
        <input type="submit" value="Submit">
    </form>

    <!-- verifico la prima condizione -->
    <?php if(strlen($name)>=3) {
        echo ("ottimo la PRIMA condizione è rispettata <br>");
        $primeCondition = true;
        //var_dump($primeCondition);
    }
    else {
        echo ("non hai rispettato la condizione uno <br>");
    }
    ?>

    <!-- verifico la seconda condizione -->
    <?php if (strpos($mail, '.') &&  strpos($mail, '@')){
        // var_dump ($mail);
        echo ("ottimo la SECONDA condizione è rispettata <br>");
        $secondCondition = true;
        //var_dump($secondCondition);
    } else {
        echo ("non hai rispettato la condizione due <br>");
    }
    ?>

    <!-- verifico la terza condizione -->
    <?php if (is_numeric($age)){
        //var_dump ($age);
        echo ("ottimo la TERZA condizione è rispettata <br>");
        $terzaCondition = true;
        //var_dump($terzaCondition);
    } else {
        echo ("non hai rispettato la condizione tre <br>");
    }
    ?>

    <?php if ($primeCondition === true && $secondCondition === true && $terzaCondition === true){
       
        echo ("<h2>accesso riuscito</h2>");
        
    } else {
        echo ("<h2>accesso negato</h2>");
    }
    ?>

</body>
</html>