<?php 

include_once PATH_MODEL . "Connection.php";
include_once PATH_ENTITY . "Cook.php";

class ModelCook { 

    public static function findOneBy($fieldName, $value) {
        $pdo = Connection::getPdo(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM cooks where $fieldName = ?";
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