<?php

include_once PATH_MODEL . "Connection.php";

class ModelRecipe {

    public static function readAll() {
        $pdo = Connection::getPdo();
        $sql = "SELECT recipes.*, users.firstname , users.lastname FROM recipes JOIN users ON users.id_user = recipes.id_user";
        $result = $pdo->query($sql);
        if ($result) {
            $array = $result->fetchAll(PDO::FETCH_CLASS, 'Recipe');
        } else {
            $array = [];
        }
        return $array;
    }

    public static function findLike() {
        $pdo = Connection::getPdo();
        $req = "SELECT * FROM recipes WHERE recipes.name LIKE ? LIMIT 10";
        $result = $pdo->query($req);
        if ($result) {
            $array = $result->fetchAll(PDO::FETCH_CLASS, 'Recipe');
        } else {
            $array = [];
        }
        return $array;
    }

    /*
    public function insertRecipe(Recipes &$recipe) {
        $pdo = Connection::getPdo();
        try {
            // Create prepared statement
            $sql = "INSERT INTO recipe (name, difficulty,portions,flag,preparationTime,idChef) VALUES (?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $values = [$recipe->getName(), $recipe->getDifficulty(), $recipe->getPortions(), $recipe->getFlag(), $recipe->getPreparationTime(), $recipe->getIdChef()];
            // Execute the prepared statement
            $stmt->execute($values);
            $newRecipe = $this->readOneBy("idRecipe", $pdo->lastInsertId());
            echo "Records inserted successfully.";
        } catch (PDOException $e) {
            die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        }
        unset($pdo);
        return $newRecipe;
    }

    public function deleteRecipe(Recipes &$recipe) {
        $pdo = Connection::getPdo();
        try {
            $sql = "UPDATE recipe SET flag = 'b' WHERE idRecipe = ?";
            $stmt = $pdo->prepare($sql);
            $values = [$recipe->getIdRecipe()];
            // Execute the prepared statement
            $stmt->execute($values);
            $deleteRecipe = $this->readOneBy("idRecipe", $recipe->getIdRecipe());
            echo "Records deleted successfully.";
        } catch (PDOException $e) {
            die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        }
        unset($pdo);
        return  $deleteRecipe;
    }

    public function readOneBy($parameter, $value) {
        //requete
        $pdo = Connection::getPdo();
        $sql = "SELECT * FROM recipes where $parameter = '$value'";
        $result = $pdo->query($sql);

        if ($result) {
            $data = $result->fetch();
        } else {
            $data = [];
        }
        
        $recipe = new Recipe();
        $recipe->setRecipeFromArray($data);
        return $recipe;
    }

    public function readAllBy($parameter, $value) {
        $pdo = Connection::getPdo();

        $sql = "SELECT * FROM recipes where $parameter = '$value'";
        $result = $pdo->query($sql);

        if ($result) {
            $array = $result->fetchAll(PDO::FETCH_CLASS, 'Recipes');
        } else {
            $array = [];
        }
        return $array;
    }

    public function updateRecipes(Recipes &$recipe) {
        $pdo = Connection::getPdo();
        try {
            $sql = "UPDATE recipes SET id_image = ?, name = ?, portions = ?, flag = ?, idChef = ? where idRecipe = ?";

            $stmt = $pdo->prepare($sql);

            $values = [$recipe->getIdImage(), $recipe->getName(), $recipe->getPortions(), $recipe->getFlag(), $recipe->getIdChef(), $recipe->getIdRecipe()];
            // Execute the prepared statement
            $stmt->execute($values);
            $recipe = $this->readOneBy("idRecipe", $recipe->getIdRecipe());
            echo "Records deleted successfully.";
        } catch (PDOException $e) {
            die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        }
        unset($pdo);
        return $recipe;
    }*/

}

?>