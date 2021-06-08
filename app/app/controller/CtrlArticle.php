<?php

class CtrlArticle {

  function __construct() {}

  public function allArticle() {
    $model = new ModelArticle();
    return $model -> readAll();
  }

  
}

?>