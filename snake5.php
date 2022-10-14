<!-- 
Snack 5
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$array = [
    [
        'nome' => 'alessandro',
        'cognome' => 'bianchi',
        'voti' => [5,5,6],
    ],
    [
        'nome' => 'chiara',
        'cognome' => 'quaglia',
        'voti' => [6,5,7],
    ],
    [
        'nome' => 'ismael',
        'cognome' => 'diaz',
        'voti' => [7,8,6]
    ]
    ];

for($i = 0; $i < count($array); $i++){
    $alunno = $array[$i];
    // var_dump($alunno);
    $mediaVoti = array_sum($alunno['voti']) / count($alunno['voti']);

    ?>

<h1>Nome studente:<?= $alunno['nome'] ?></h1>
<h2>Congnome studente:<?= $alunno['cognome'] ?></h2>
<h2>Media Voti:<?= $mediaVoti?></h2>



    <?php

};

?>