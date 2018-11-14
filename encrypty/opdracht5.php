<?php
$name =$_POST['name'];

if(empty($_POST['name'])){
    echo 'Je bent iets vergeten in te vullen.<br>';
    echo 'Klik <a href="index.php">hier</a> om het nog eens te proberen.';
    exit();
}
if($name) {
    echo ('Waarde is ingevuld<br>');
    if (is_string($name)) {

        echo ('De Waarde is een string<br>');
    }
    if (is_numeric($name)) {
        echo ('De Waarde is een nummer<br>');
    }





}

