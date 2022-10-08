<?php
include 'animalclass.php';
$dbh=new PDO('mysql:host=localhost;dbname=animaux','root','');
$stmt=$dbh->query('SELECT id,nom,espece FROM animal');
$animaux=$stmt->fetchAll(PDO::FETCH_CLASS,'animal');
echo '<table border="1">';
foreach($animaux as $animal)
{
echo '<tr>';
echo '<td>'.$animal->getId().'</td>';
echo '<td>'.$animal->getNom().'</td>';
echo '<td>'.$animal->getEspece().'</td>';
echo '<td>';
$animal->sePresenter();
$animal->dormir();
echo '</td>';
echo '</tr>';
}
echo '</table>';
foreach($animaux as $animal)
{
$animal->setNom('Maurice');
}
$update = $dbh->prepare('UPDATE animal SET nom=:nom, espece=:espece WHERE id=:id');
foreach($animaux as $animal)
{
$success = $update->execute(array(
    'nom'=>$animal->getNom(),
    'espece'=>$animal->getEspece(),
    'id'=>$animal->getId()
  ));
}
?>
