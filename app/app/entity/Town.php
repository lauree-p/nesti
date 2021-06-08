<?php 

class Town { 

    private $id_town;
    private $name;

    /**
     * Get the value of id_town
     */
    public function getIdTown()
    {
        return $this->id_town;
    }

    /**
     * Set the value of id_town
     *
     * @return  self
     */
    public function setIdTown($id_town)
    {
        $this->id_town = $id_town;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}

?>