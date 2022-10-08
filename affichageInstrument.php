<?php

$nomInstrument = $_POST['selectInstrument'];
$dbh=new PDO('mysql:host=localhost;dbname=orchestre','root','');
$stmt=$dbh->query('SELECT id,nom,couleur,son FROM instrument WHERE nom = "'.$nomInstrument.'"');
$orchestre=$stmt->fetchAll();

echo("Nom de l'instrument : ".$nomInstrument."<br>");
foreach ($orchestre as $key => $value) {
    echo("Sa couleur est : ".$value['couleur'].'<br>');
    echo("Son son est : ".$value['son'].'<br>');

}

?>
