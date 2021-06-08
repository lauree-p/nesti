<?php

class Recipe {

    private $id_recipe;
    private $name;
    private $difficulty;
    private $person;
    private $duration;
    private $id_cook;
    private $lastname;
    private $firstname;

    /**
     * Get the value of id_recipe
     */
    public function getIdRecipe() {
        return $this->id_recipe;
    }

    /**
     * Set the value of id_recipe
     * @return  self
     */
    public function setIdRecipe($id_recipe) {
        $this->id_recipe = $id_recipe;
        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set the value of name
     * @return  self
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get the value of difficulty
     */
    public function getDifficulty() {
        return $this->difficulty;
    }

    /**
     * Set the value of difficulty
     * @return  self
     */
    public function setDifficulty($difficulty) {
        $this->difficulty = $difficulty;
        return $this;
    }

    /**
     * Get the value of nbr_people
     */
    public function getPerson() {
        return $this->person;
    }

    /**
     * Set the value of nbr_people
     * @return  self
     */
    public function setPerson($person) {
        $this->person = $person;
        return $this;
    }

    /**
     * Get the value of duration
     */
    public function getDuration() {
        return $this->duration;
    }

    /**
     * Set the value of duration
     * @return  self
     */
    public function setDuration($duration) {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Get the value of id_cook
     */
    public function getIdCook()
    {
        return $this->id_cook;
    }

    /**
     * Set the value of id_cook
     *
     * @return  self
     */
    public function setIdCook($id_cook)
    {
        $this->id_cook = $id_cook;

        return $this;
    }    
    
    public function getCook() {
        $cook = CookDAO::findOneBy("id_cook", $this->getIdCook(), "cooks");
        var_dump($cook);
        return $cook;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function formatDuration($duration) {

        //On formate l'heure
        $durationFormat = date('h\hi',strtotime($duration));
        // On sépare les heures des minutes
        $datasTime = explode('h',$durationFormat);

        // Si l'heure est inférieur à 10
        if((int)$datasTime[0] < 10){
            $datasTime[0] = ltrim($datasTime[0], '0');
        }
        // Si il y a des heures
        if((int)$datasTime[0] > 1){
            $datasTime[0] = $datasTime[0].'h';
        }else{
            $datasTime[0] = '';
        }
        // Si les minutes sont à 0
        if($datasTime[1] == "00"){
            $datasTime[1] = ltrim($datasTime[1], '00');
        }else{
            $datasTime[1] = $datasTime[1]." min";
        }

        $durationFormat = $datasTime[0].$datasTime[1];

        return $durationFormat;
    }
}

?>