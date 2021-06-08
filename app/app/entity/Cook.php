<?php 

class Cook { 

    private $id_user;

    /**
     * Get the value of id_user
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     * @return  self
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }
    
    public function getCountRecipe() {
        $model= new ModelRecipes();
        $c = $model->readAllBy("idChef",$this->idChef);
        $tot = count($c);
        return $tot;
    }

    public function setChefFromArray($chef) {

       foreach ($chef as $key => $value) {
 
          $this->$key = $value;
       }
    }

    public function getLastRecipe() {
        $model= new ModelRecipes();
        $c = $model->readAllBy("idChef",$this->idChef);
        usort($c, function($a, $b) {
            return strcmp($a->getDateCreation(), $b->getDateCreation());
        });
        $index = sizeof($c)-1;
        $result = '';
        if($index>=0){
            $result = $c[$index]->getName();
        }
        return $result;
    }

    public function getUser() { 
        $model= new ModelUsers();
        return $model->readOneBy("idUsers",$this->idChef);
    }

    public function getAllRecipeFromChef() {
       $model = new ModelRecipes();
       $logs = $model->readAllBy("idChef", $this->getIdChef());
       return $logs;
    }
}

?>