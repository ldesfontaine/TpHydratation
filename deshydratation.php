<?php
include 'instrumentclass.php';
$dbh=new PDO('mysql:host=localhost;dbname=orchestre','root','');
$stmt=$dbh->query('SELECT id,nom,couleur,son FROM instrument');
$orchestre=$stmt->fetchAll(PDO::FETCH_CLASS,'instrument');

echo '<table border="1">';
?>


<?php

foreach($orchestre as $instrument)
{
echo '<tr>';
echo '<td>'.$instrument->getId().'</td>';
echo '<td>'.$instrument->getNom().'</td>';
echo '<td>'.$instrument->getCouleur().'</td>';
echo '<td>'.$instrument->getSon().'</td>';
echo '<td>';
echo '</tr>';
}
echo '</table>';


$update = $dbh->prepare('UPDATE instrument SET nom=:nom, couleur=:couleur son=:son WHERE id=:id');
foreach($orchestre as $instrument)
{
$success = $update->execute(array(
    'nom'=>$instrument->getNom(),
    'couleur'=>$instrument->getCouleur(),
    'son'=>$instrument->getSon(),
    'id'=>$instrument->getId()
  ));
}
?>






<h1> Affichage de la couleur et du son de l'instrument : </h1>
<form action="affichageInstrument.php" method="POST">
  <select name="selectInstrument">
  <?php
    foreach($orchestre as $instrument) {
      echo '<option name="'.$instrument->getId().'" id="'.$instrument->getId().'">'.$instrument->getNom().'</option>';
    }
    ?>
  </select>
  <input type="submit" value="Valider">
</form>







<h1>Changer le nom de l'instrument : </h1>

<form action="changeNomInstrument.php" method="POST">
  <select name="selectInstrument">
  <?php
    foreach($orchestre as $instrument) {
      echo '<option name="'.$instrument->getId().'" id="'.$instrument->getId().'">'.$instrument->getNom().'</option>';
    }
    ?>
  </select>
  <br>
  <br>
  <label for="nouveauNom">Nouveau nom de l'instrument : </label>
  <input type="text" name="nouveauNom">
  <br>
  <input type="submit" value="Valider">
</form>



<p>