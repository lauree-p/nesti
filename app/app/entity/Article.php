<?php

class Article {

        private $id_article;
        private $quantity_by_unit;
        private $date_creation;
        private $date_update;
        private $state;
        private $name;
        private $price;
        private $type;
        private $stock;
        private $name_unit;
        private $name_product;
        private $id_product;
        private $last_import;

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
         * Get the value of quantity_by_unit
         */
        public function getQuantityByUnit()
        {
                return $this->quantity_by_unit;
        }

        /**
         * Set the value of quantity_by_unit
         *
         * @return  self
         */
        public function setQuantityByUnit($quantity_by_unit)
        {
                $this->quantity_by_unit = $quantity_by_unit;

                return $this;
        }


        /**
         * Get the value of date_creation
         */
        public function getDateCreation()
        {
                return $this->date_creation;
        }

        /**
         * Set the value of date_creation
         *
         * @return  self
         */
        public function setDateCreation($date_creation)
        {
                $this->date_creation = $date_creation;

                return $this;
        }

        /**
         * Get the value of date_update
         */
        public function getDateUpdate()
        {
                return $this->date_update;
        }

        /**
         * Set the value of date_update
         *
         * @return  self
         */
        public function setDateUpdate($date_update)
        {
                $this->date_update = $date_update;

                return $this;
        }

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
         * Get the value of state
         */
        public function getState()
        {
                return $this->state;
        }

        /**
         * Set the value of state
         *
         * @return  self
         */
        public function setState($state)
        {
                $this->state = $state;

                return $this;
        }

        /**
         * Get the value of name
         */
        public function getName()
        {
                $nameProduct = ucfirst($this->getNameProduct());

                if ($nameProduct[0] =="A" || $nameProduct[0] =="E"|| $nameProduct[0] =="I"|| $nameProduct[0] =="O"|| $nameProduct[0] =="U") {
                        $separateur = " d'";
                }else{
                        $separateur =  " de ";
                }
                
                $this->name = $this->getQuantityByUnit()." ".$this->getNameUnit().$separateur.$this->getNameProduct();    
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

        /**
         * Get the value of price
         */
        public function getPrice()
        {
                $modelArticlesPrice = new ModelArticlesPrice;
                $article = $modelArticlesPrice->findOneBy("id_article", $this->getIdArticle());
                $this->price = number_format($article['price'], 2).' €';
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
         * Get the value of type
         */
        public function getType()
        {
                $modelIngredient = new ModelIngredient;
                $ingredient = $modelIngredient->findOneBy("id_product", $this->getIdProduct());

                if (isset($ingredient)) {
                        $this->type = "Ingrédient";
                } else {
                        $this->type = "Ustensile";
                }
                return $this->type;
        }

        /**
         * Set the value of type
         *
         * @return  self
         */
        public function setType($type)
        {
                $this->type = $type;

                return $this;
        }

        /**
         * Get the value of stock
         */
        public function getStock()
        {
                return $this->stock;
        }

        /**
         * Set the value of stock
         *
         * @return  self
         */
        public function setStock($stock)
        {
                $this->stock = $stock;

                return $this;
        }

        /**
         * Get the value of unit
         */
        public function getUnit()
        {
                return $this->unit;
        }

        /**
         * Set the value of unit
         *
         * @return  self
         */
        public function setUnit($unit)
        {
                $this->unit = $unit;

                return $this;
        }

        /**
         * Get the value of product
         */
        public function getProduct()
        {
                return $this->product;
        }

        /**
         * Set the value of product
         *
         * @return  self
         */
        public function setProduct($product)
        {
                $this->product = $product;

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

        /**
         * Get the value of last_import
         */
        public function getLastImport()
        {
                $modelImport = new ModelImportation;
                $import = $modelImport->findOneBy("id_article", $this->getIdArticle());
                $this->last_import = $import['date_import'];
                return $this->last_import;
        }

        /**
         * Set the value of last_import
         *
         * @return  self
         */
        public function setLastImport($last_import)
        {
                $this->last_import = $last_import;

                return $this;
        }
}

?>