<?php

include_once(PATH_MODEL . 'Connection.php');

class ModelLog {

    public static function readAll() {
        $pdo = Connection::getPdo();
        $sql = "SELECT * from user_logs";
        $result = $pdo->query($sql);
        if ($result) {
            $array = $result->fetchAll(PDO::FETCH_CLASS, 'User');
        } else {
            $array = [];
        }
        return $array;
    }

    public static function createLog($log) {
        $pdo = Connection::getPdo(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO user_logs (id_user) values(?)";
        $q = $pdo->prepare($sql);
        $q->execute([$log->getIdUser()]);
    }

    public static function findOneBy($fieldName, $value) {
        $pdo = Connection::getPdo(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM user_logs where $fieldName = ?";
        $q = $pdo->prepare($sql);
        $q->execute([$value]);
        if ($q->rowCount() != 0) {
            $data = $q->fetch(PDO::FETCH_ASSOC);
        } else {
            $data = null;
        }
        
        return $data;
    }

    public function updateLog($log) {
        $pdo = Connection::getPdo();
        try {
            $sql = "UPDATE user_logs SET date_connection = ? WHERE id_user = ?";
            $stmt = $pdo->prepare($sql);
            $values = [$log->getTDateTime(), $log->getIdUser()];
            $stmt->execute($values);

        } catch (PDOException $e) {
            die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        }
        unset($pdo);
        return $log;
    }

}

?>