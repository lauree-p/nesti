<?php
include_once(PATH_MODEL.'Connection.php');

class ModelAdmin {

    public function insertAdmin(Admin &$idAdmin){

        $pdo= Connection::getPdo();
        try{
            // Create prepared statement
            $sql = "INSERT INTO administrators (idAdministrator) VALUES (?)";
            
            $stmt = $pdo->prepare($sql);
      
            $values= [$idAdmin -> getIdAdmin()];        
            // Execute the prepared statement
            var_dump($values);
            $stmt->execute($values);
      
            //$newUser = $this->readOneBy("idUsers",$pdo->lastInsertId());
            echo "Records insert admin inserted successfully.";
        } catch(PDOException $e){
            die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        }
        unset($pdo);
        // return $newUser;
    }

    public static function findOneBy($fieldName, $value) {
        $pdo = Connection::getPdo(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM administrators where $fieldName = ?";
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