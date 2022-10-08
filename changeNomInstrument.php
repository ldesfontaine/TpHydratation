

<?php
$dbh=new PDO('mysql:host=localhost;dbname=orchestre','root','');




$nomInstrument = $_POST['selectInstrument'];
$nouveauNomInstrument = $_POST['nouveauNom'];
$stmt=$dbh->query('UPDATE instrument SET nom="'.$nouveauNomInstrument.'" WHERE nom = "'.$nomInstrument.'"');
$stmt->execute();
if ($stmt) {
    echo("Nouveau nom de l'instrument : ".$nouveauNomInstrument."<br>");
}

// echo("Nom de l'instrument : ".$nomInstrument."<br>");
// foreach ($orchestre as $key => $value) {
//     echo("Sa couleur est : ".$value['couleur'].'<br>');
//     echo("Son son est : ".$value['son'].'<br>');

// }

?>