<?php
include('app/model/Recette.php');
$model = new Recette ();
$recette = $model -> readall(); 

var_dump($recette);
?>