<?php

class CtrlRecipe {

  function __construct() {}

  public function allRecipe() {
    $model = new ModelRecipe();
    return $model -> readAll();
  }

}

?>


