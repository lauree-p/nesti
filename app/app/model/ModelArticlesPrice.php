<?php
include_once(PATH_MODEL.'Connection.php');
include_once PATH_ENTITY . "ArticlesPrice.php";

class ModelArticlesPrice
{

    public static function findOneBy($fieldName, $value) {
        $pdo = Connection::getPdo(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM articles_price where $fieldName = ?";
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