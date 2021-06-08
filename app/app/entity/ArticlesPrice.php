<?php

class ArticlesPrice 
{
    private $id_articles_price;
    private $application_date;
    private $price;
    private $id_article;

    /**
     * Get the value of id_articles_price
     */
    public function getIdArticlesPrice()
    {
        return $this->id_articles_price;
    }

    /**
     * Set the value of id_articles_price
     *
     * @return  self
     */
    public function setIdArticlesPrice($id_articles_price)
    {
        $this->id_articles_price = $id_articles_price;

        return $this;
    }

    /**
     * Get the value of application_date
     */
    public function getApplicationDate()
    {
        return $this->application_date;
    }

    /**
     * Set the value of application_date
     *
     * @return  self
     */
    public function setApplicationDate($application_date)
    {
        $this->application_date = $application_date;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

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
}