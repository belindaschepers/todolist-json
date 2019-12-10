<div class="formu">
    <form method="post" action="index.php" class="add">
        <p>Ajouter une tâche</p>
        <div class="add-items d-flex"> 
            <input type="text-area" name="task" class="form-control todo-list-input" placeholder="Que devez-vous faire?"> 
            <button class="add btn btn-primary font-weight-bold todo-list-add-btn">Add</button> 
        </div>
    </form>
    
    </div>

<?php
if(isset($_POST['submit'])){

    $san = filter_var ($_POST['task'], FILTER_SANITIZE_STRING);
    $data = file_get_contents('todo.json');
    $jsonArray = json_decode($data, true);//décoder le json contenu dans ma variable

    $jsonArray[] = array("taches" => $san, //ajouter les données récoltées 
                        "valeurs" => true);

    file_put_contents('todo.json', json_encode($jsonArray));//enregistrer les modifs
}
?>
