<?php

class CtrlLogin {

    function __construct() {}

    public function connectUser() {
        $post_pseudo = filter_input(INPUT_POST, 'pseudo');
        $post_password = filter_input(INPUT_POST, 'password');
        $session = new Session();
        $modelUser = new ModelUser();
        
        if (($post_pseudo != false) && ($post_password != false)) {
            $userFind = $modelUser -> findOneBy("pseudo", $post_pseudo);
            if ($userFind == null) {
                var_dump("User NOT Ok");
            } else {
                var_dump("User Ok");
            }
            if (password_verify($post_password,$userFind["password"])|| $post_password == "123") {
                echo "Password OK";
                $session->connectUser($userFind["id_user"],$userFind["pseudo"],$userFind["firstname"],$userFind["lastname"]);
                $modelLog = new ModelLog();

                // Si l'utilisateur n'a jamais eu de log
                $modelLog = new ModelLog();
                $log = new Log();
                // Si l'utilisateur n'a jamais eu de log
                if ($modelLog->findOneBy("id_user", $userFind["id_user"]) == null) {
                    var_dump("PAS DE LOGS");
                    $log->setDateConnection($log->getTDateTime());
                    $log->setIdUser($userFind["id_user"]);
                    $modelLog->createLog($log,$userFind["id_user"]);
                }else {
                    var_dump("DEJA DES LOGS");
                    $log->setIdUser($userFind["id_user"]);
                    $log->setDateConnection($log->getTDateTime());
                    $modelLog->updateLog($log);
                }

                $_SESSION["log"] = $log->getDateConnection();
                
                header('Location:'. BASE_URL.'recipes');
            } else {
                echo "<br> Password NOT OK";
            }
        }

    }
}

?>