<?php
$json = file_get_contents("todo.json");
$json_data = json_decode($json,true);
$arr = array('todo' => array(),
             'notTodo' => array());
foreach($json_data as $value)
{
    if($value['tache']!=null){
        if($value['checked']==false)
            array_push($arr['todo'],'<div class="bullet text-center"><input type="checkbox" class="afaire"><span>' . $value['tache'].'</span></div>');
        else
            array_push($arr['notTodo'],'<div class="bullet text-center"><input type="checkbox" class="archive" checked><span>' . $value['tache'].'</span></div>');
    }
}
echo json_encode($arr);
?>