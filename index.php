
<?php
include('app/config.php');
$loc = filter_input(INPUT_GET, "loc");
$action  = filter_input(INPUT_GET, "action");
//controlleur de session >>

//include('app/');
switch ($loc) {
    case 'recette':
      include('app/controller/controlRecette.php');
        break;
    
    default:
        # code...
        break;
}
include('app/view/template.php');
  ?>
