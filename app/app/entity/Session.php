<?php

class Session {

    public function isConnectUser() {

        $isConnect = false;

        if(isset($_SESSION["id_user"]) && !empty($_SESSION["id_user"])) {
            $isConnect = true;
        } else {
            $isConnect = false;
        }

        return $isConnect;
    }

    public function connectUser($id, $login, $firstname, $lastname) {

        $_SESSION["id_user"] = $id;
        $_SESSION["login"] = $login;
        $_SESSION["firstname"] = $firstname;
        $_SESSION["lastname"] = $lastname;
    }

    public function disconnectUser() {
        echo ('disconnectUser');
        session_unset();
        session_destroy();
    }

}

?>