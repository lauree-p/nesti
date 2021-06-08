<?php

include_once(PATH_MODEL . 'Connection.php');

class ModelUser {

    public static function readAll() {
        $pdo = Connection::getPdo();
        //$sql = "SELECT * from users";
        $sql = "SELECT users.*, user_logs.date_connection FROM users JOIN user_logs ON user_logs.id_user = users.id_user";
        //"SELECT recipes.*, users.firstname , users.lastname FROM recipes JOIN users ON users.id_user = recipes.id_user";
        $result = $pdo->query($sql);
        if ($result) {
            $array = $result->fetchAll(PDO::FETCH_CLASS, 'User');
        } else {
            $array = [];
        }
        return $array;
    }

    public static function createUser($user) {
        $pdo = Connection::getPdo(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO users (login,password_hash,email,firstname,lastname,state,id_town,address_1,address_2,zip_code) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute(
            [
                $user->getLogin(),
                $user->getPasswordhash(),
                $user->getEmail(),
                $user->getFirstname(),
                $user->getLastname(),
                $user->getState(),
                $user->getIdTown(),
                $user->getAddress1(),
                $user->getAddress2(),
                $user->getZipCode()
            ]
        );
    }

    public static function findOneBy($fieldName, $value) {
        $pdo = Connection::getPdo(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM users where $fieldName = ?";
        $q = $pdo->prepare($sql);
        $q->execute([$value]);
        if ($q->rowCount() != 0) {
            $data = $q->fetch(PDO::FETCH_ASSOC);
        } else {
            $data = null;
        }
        
        return $data;
    }

}

?>