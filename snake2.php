<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
 if( isset($_GET['name']) ){
    $name = $_GET['name'];
 };

//  echo $name;

 if( isset($_GET['mail']) ){
    $mail = $_GET['mail'];
 };

//  echo $mail;

 if( isset($_GET['age']) ){
    $age = $_GET['age'];;
 };

//  echo $age;

// $iTisOk = strlen($name) > 3 && strpos($mail, '.') && strpos($mail, '@') && is_numeric($age);

if(strlen($name) > 3){
    echo 'Accesso Riuscito';
} else{
    echo 'Accesso Negato';
}

if(strpos($mail, '.') && strpos($mail, '@')){
    echo 'Accesso Riuscito';
} else{
    echo 'Accesso Negato';
}

if(is_numeric($age)){
    echo 'Accesso Riuscito';
} else{
    echo 'Accesso Negato';
}

    
?>
