<?php

class ModelTown {

    public static function createTown($town) {
        $pdo = Connection::getPdo(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO towns (name) values(?)";
        $q = $pdo->prepare($sql);
        $q->execute([$town->getName()]);
        //Connection::disconnect();
    }

    public static function findOneBy($fieldName, $value) {
        $pdo = Connection::getPdo(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM towns where $fieldName = ?";
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