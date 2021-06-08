<?php

class Product
{
    private $id_product;
    private $name_product;

    /**
     * Get the value of id_product
     */
    public function getIdProduct()
    {
        return $this->id_product;
    }

    /**
     * Set the value of id_product
     *
     * @return  self
     */
    public function setIdProduct($id_product)
    {
        $this->id_product = $id_product;

        return $this;
    }

    /**
     * Get the value of name_product
     */
    public function getNameProduct()
    {
        return $this->name_product;
    }

    /**
     * Set the value of name_product
     *
     * @return  self
     */
    public function setNameProduct($name_product)
    {
        $this->name_product = $name_product;

        return $this;
    }
}