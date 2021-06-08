<?php

class UnitMesure
{
    private $id_unit;
    private $name_unit;

    /**
     * Get the value of id_unit
     */
    public function getIdUnit()
    {
        return $this->id_unit;
    }

    /**
     * Set the value of id_unit
     *
     * @return  self
     */
    public function setIdUnit($id_unit)
    {
        $this->id_unit = $id_unit;

        return $this;
    }



    /**
     * Get the value of name_unit
     */
    public function getNameUnit()
    {
        return $this->name_unit;
    }

    /**
     * Set the value of name_unit
     *
     * @return  self
     */
    public function setNameUnit($name_unit)
    {
        $this->name_unit = $name_unit;

        return $this;
    }
}