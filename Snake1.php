<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<script>
    console.log('okkkkkk')
</script>

<?php

$array = [
    
    [
        'homeTeam' => 'Olimpia Milano',
        'awayTeam' => 'Cantù',
        'homePoints'=> '55',
        'awayPoints' => '60',
    ],

    [   'homeTeam' => 'Roma',
        'awayTeam' => 'Verona',
        'homePoints'=> '65',
        'awayPoints' => '50',
    ],

    [   'homeTeam' => 'Cremona',
        'awayTeam' => 'Torino',
        'homePoints'=> '55',
        'awayPoints' => '70',
    ],

    [   'homeTeam' => 'Venezia',
        'awayTeam' => 'Bari',
        'homePoints'=> '55',
        'awayPoints' => '50',
    ],

    
];

// accedo e stampo a display un valore attraverso la chiave
// echo $array['awayTeam']

// controllo che tutto funzioni stampando a schermo $array
    // var_dump($array)

// ciclo for per ciclare gli elementi contenuti nell'array
for($i=0; $i < count($array); $i++){
   

?>

<div>
    <!-- stampo a scherma il valore delle chiavi dentro gli array -->
<p><?= $array[$i]['homeTeam'] ?> vs <?= $array[$i]['awayTeam'] ?></p> 
<p><?= $array[$i]['homePoints'] ?> vs <?= $array[$i]['awayPoints'] ?></p> 
</div>





<?php

};


?>








<!-- 
Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: 
DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

Snack 5
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->