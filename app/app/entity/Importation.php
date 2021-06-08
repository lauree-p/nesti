<?php 

class Importation { 
    private $id_article;
    private $ref_order;
    private $id_user;
    private $date_import;

    /**
     * Get the value of id_article
     */
    public function getIdArticle()
    {
        return $this->id_article;
    }

    /**
     * Set the value of id_article
     *
     * @return  self
     */
    public function setIdArticle($id_article)
    {
        $this->id_article = $id_article;

        return $this;
    }

    /**
     * Get the value of ref_order
     */
    public function getRefOrder()
    {
        return $this->ref_order;
    }

    /**
     * Set the value of ref_order
     *
     * @return  self
     */
    public function setRefOrder($ref_order)
    {
        $this->ref_order = $ref_order;

        return $this;
    }

    /**
     * Get the value of id_user
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of date_import
     */
    public function getDateImport()
    {
        return $this->date_import;
    }

    /**
     * Set the value of date_import
     *
     * @return  self
     */
    public function setDateImport($date_import)
    {
        $this->date_import = $date_import;

        return $this;
    }
}
