<?php
$data = file_get_contents('todo.json');
$jsonArray = json_decode($data, true);
echo '
<div class="col-md-5">
    <h3>A faire</h3>
';

$i = 1;//variable pour le num des tâches
echo '<form method="post" action="index.php">
<input type="submit" name="supprimer" class="arch" class="bouton" value="archiver les tâches"/>';

foreach ($jsonArray as $value) {
    if($value["valeurs"]===true){
        echo '<div class="content'.$i.' contenant col-md-12">
        <input type="checkbox" name="check'.$i.'" /> - Tache N° ' . $i . ": " . $value["taches"] . 
        '</div>' ;
        $i++;
    }
}
echo '</form>
</div>
<div class="col-md-offset-1 col-md-5">
    <h3>Archives</h3>';
    $a=1;
    echo '<form method="post" action="index.php">
<input type="submit" name="supprimer" class="suppr" class="bouton" value="supprimer les tâches"/>';

foreach ($jsonArray as $value) {
    if($value["valeurs"]===false){  
    echo '<div class="content'.$a.' contenant">
    <input type="checkbox" name="check'. $a .'" /> - Tache N° ' . $a . ": " . $value["taches"] . 
    '</div>' ;
    $a++;  }
}
echo'</div>';  

?>