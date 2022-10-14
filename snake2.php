<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
// chiedo questi parametri tramite get
 $name = $_GET['name'];
 $mail = $_GET['mail'];
 $age = $_GET['age'];

$iTisOk = strlen($name) > 3 && strpos($mail, '.') && strpos($mail, '@') && is_numeric($age);

if($iTisOk){
    echo 'Accesso Riuscito';
} else{
    echo 'Accesso Negato';
}

    
?>

<!-- if($name == 'eros') {
    echo 'OK CAPO';
    
} else($name != 'eros'); {
    echo $name;
} -->