<!-- 
    ## Snack 7
    Creare un array contenente qualche alunno di un’ipotetica classe. 
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
    Stampare Nome, Cognome e la media dei voti di ogni alunno.
 -->

 <?php 
   
    $classe = [
        [
            'nome' => 'marco',
            'cognome' => 'belloni',
            'voti' => [5,6,8],
        ],
        [
            'nome' => 'arianna',
            'cognome' => 'marchetti',
            'voti' => [10,10,10],
        ],
        [
            'nome' => 'francesca',
            'cognome' => 'fascina',
            'voti' => [2,3,4],
        ],
    ];

    for ($i=0; $i < count($classe); $i++) { 
        $alunno = $classe[$i];
        $sum = array_sum($alunno['voti']);

        $media = $sum / count($alunno['voti']);

        echo $alunno['nome'] . ' ' . $alunno['cognome'] . ' ' . $media . '<br>';
    }