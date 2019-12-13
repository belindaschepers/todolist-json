<?php
include ('formulaire.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--CSS -->
    <link rel="stylesheet" href="style.css">

    <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">

    <title>Todo List Json</title>

  </head>

  <body>
    <div class="row justify-content-center mt-2">
        <h2>To Do List</h2>
    </div>
    
    <div class="row justify-content-center mt-2">
        <img src="Images/robot-1470108_960_720.png" alt="robotList">
    </div>

    <div class="container">
        <form method="post" action="index.php" class="add" id="form">
       
            <div class="row mt-5">
                <input type="text-area" class="form-control" id="tache" placeholder="Ajouter une tâche">
            </div> 
        
            </div>
            <div class="row justify-content-center mt-3">
                <input type="submit" class="btn btn-danger" value="Enregister" name="submit" />
            </div>           
        </form>
    </div>
    <div class="text-center mt-5">
    <h3>Tâches</h3>
    </div>
    <div class="text-center mt-5 afaire" id="todo">
        
    </div>
      
    <div class="row justify-content-center mt-3">
        <input type="submit" class="btn btn-danger" value="Archiver" name="submit" id="save" />
    </div>
    <div class="row justify-content-center mt-5">
        <h3>Archives</h3> 
    </div>
    <div  class="text-center archive" id="target">

    </div>

    <script src="script.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>$( function() {
    $( "#todo" ).sortable();
    $( "#todo" ).disableSelection();
  } );</script>
 </body>
</html>