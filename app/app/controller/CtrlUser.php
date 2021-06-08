<?php

class CtrlUser {

    function __construct() {}

    public function allUser() {
        $modelUser = new ModelUser();
        return $modelUser->readAll();
    }

    public function editUser() {
        $modelUser = new ModelUser();
        $num = filter_input(INPUT_GET, "id", FILTER_SANITIZE_STRING);
        $userfind = $modelUser->findOneBy("id_user",$num);
        //var_dump($userfind);
        $user = new User();
        $user->setFirstname($userfind['firstname']);
        $user->setLastname($userfind['lastname']);
        $user->setState($userfind['state']);
        $user->setDateCreation($userfind['date_creation']);
        $user->setDateConnection($user->getDateConnection());
        return $user;
    }

    public function createUser() {
        $modelUser = new ModelUser();
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

            echo "Je veux créer un user ";
            echo "<br>";
        
            // On créer la ville si elle n'existe pas
            $modelTown = new ModelTown();
            $town = $modelTown -> findOneBy("name", $_POST['town']);
        
            echo "Résultat de la requette : ";
            var_dump($town);
            echo "<br>";
        
            // Si elle n'existe pas
            if ($town == null) {
                echo "La ville n'existe pas encore";
                $town = new Town();
                $town ->setName($_POST['town']);
                $modelTown->createTown($town);
            // Sinon , si elle existe
            } else {
                $town = new Town();
                $town ->setName($_POST['town']);
                echo "La ville existe";
            }
        
            $town = $modelTown -> findOneBy("name", $_POST['town']);
        
            $user = new User();
            $user->setLogin($_POST['login']);
            $user->setEmail($_POST['email']);
            $user->setPassword(password_hash($_POST['password'], PASSWORD_BCRYPT));
            $user->setFirstname($_POST['firstname']);
            $user->setLastname($_POST['lastname']);
            $user->setAddress1($_POST['address1']);
            $user->setAddress2($_POST['address2']);
            $user->setStatus($_POST['status']);
            $user->setIdTown($town["id_town"]);
        
            $modelUser->createUser($user);
        
        }
    }

}

?>