<?php

include_once(PATH_MODEL.'Connection.php');

class ModelArticle {
   
    public static function readAll() {
        $pdo = Connection::getPdo();
        $sql = "SELECT * from articles";
        $sql = "SELECT articles.* , units_mesure.name_unit, products.name_product FROM articles JOIN products ON products.id_product = articles.id_product JOIN units_mesure ON units_mesure.id_unit = articles.id_unit";
        //$sql = "SELECT users.*, user_logs.date_connection FROM users JOIN user_logs ON user_logs.id_user = users.id_user";
        //"SELECT recipes.*, users.firstname , users.lastname FROM recipes JOIN users ON users.id_user = recipes.id_user";
        $result = $pdo->query($sql);
        if ($result) {
            $array = $result->fetchAll(PDO::FETCH_CLASS, 'Article');
        } else {
            $array = [];
        }
        return $array;
    }

    public function readOneBy($parameter, $value) {
        //requete
        $pdo = Connection::getPdo();
      
        $sql = "SELECT * FROM article where $parameter = '$value'";
        $result = $pdo->query($sql);
        //var_dump($result);
        if ($result) {

            $data = $result->fetch(PDO::FETCH_ASSOC);
        } else {

            $data = [];
        }

        $user = new Articles();
        $user->setArticleFromArray($data);
        return $user;
    }

    public function findChild($type, $value) {
        $pdo = Connection::getPdo();
        $sql = "SELECT * FROM $type WHERE id" . ucfirst($type) . "= $value";
        $result = $pdo->query($sql);
        $data = $result->fetch();
        return $data;
    }
}