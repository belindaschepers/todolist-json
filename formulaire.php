<?php
    $myTasks = [];
    $stat=false;
    $newTask = $_POST['tache']; 
    $checked = $_POST['checked'];
    $content = file_get_contents("todo.json"); 
    $phpContent = json_decode($content); 
    if($newTask != "") {
        foreach ($phpContent as $value) {
            if($value->tache==$newTask){
                $value->checked=$checked;
            }
            else{
                array_push($myTasks, $value); // Ajout des tâches dans un tableau
            }
        };
    
        if ($newTask != "") {
            $newTask = filter_var($newTask, FILTER_SANITIZE_STRING); 
        } else {
            $newTask = null;
        }
    
        $task =  array(
            'tache' => $newTask,
            'checked' => ($checked == "true" ? true :false)
        ); // Créer la nouvelle tache dans un tableau
    
        array_push($myTasks, $task); // Push de la nouvelle tache dans le tableau
    
        $json = json_encode($myTasks); 
        if(file_put_contents("todo.json", $json)) //Save
            echo 'success';
        else
            echo 'failed';
        
    }
?>
