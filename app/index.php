<?php

session_start();

include "app/loader.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$loc = filter_input(INPUT_GET, "loc", FILTER_SANITIZE_STRING);
$action = filter_input(INPUT_GET, "action", FILTER_SANITIZE_STRING);
$session = new Session();

if (!$session -> isConnectUser()) {
    $loc = "login";
}

switch ($loc) {

    case 'recipes':
        $ctrl = new CtrlRecipe();
        $arrayRecipe = $ctrl->allRecipe();
        switch ($action) {
            case 'edit':
                break;
        }
        break;
    case 'login':
        $ctrl = new CtrlLogin();
        $ctrl->connectUser();
        break;
    case 'logout':
        include(PATH_CTRL.
            'ctrl_logout.php');
        break;
    case 'users':
        $ctrl = new CtrlUser();
        $arrayUser = $ctrl->allUser();
        switch ($action) {
            case 'create':
                $ctrl->createUser();
                break;
            case 'edit':
                $user = $ctrl->editUser();
                break;
        }
        break;
    case 'articles':
        $ctrl = new CtrlArticle();
        $arrayArticle = $ctrl->allArticle();
        switch ($action) {
            case 'create':
                //$ctrl->createUser();
                break;
            case 'edit':
                //$user = $ctrl->editUser();
                break;
        }
        break;
}

include PATH_VIEW_COMMON.'template.php';

?>