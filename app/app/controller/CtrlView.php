<?php

$file = PATH_VIEW_CONTENT;

  switch($loc) {

    case 'login':
      $file .= 'login.php';
      break;

    case 'logout':
      $file .= 'login.php';
      break;

    case 'recipes':
      switch($action) {
        case "edit":
          $file .= 'recipe/recipe_edit.php';
          break;
        case "create":
          $file .= 'recipe/recipe_create.php';
          break;
        case "valid":
          $file .= 'recipe/recipe_valid.php';
          break;
        default :
          $file .= 'recipe/recipe.php';
          break;
      }
      break;

    case 'articles':
      switch($action) {
        case "edit":
          $file .= 'article/article_edit.php';
          break;
        case "create":
          $file .= 'article/article_create.php';
          break;
        case "orders":
          $file .= 'article/orders.php';
          break;
        case "imports":
          $file .= 'article/imports.php';
          break;
        default :
          $file .= 'article/articles.php';
          break;
      }
      break;

    case 'users':
      switch($action) {
        case "edit":
          $file .= 'user/users_edit.php';
          break;
        case "create":
          $file .= 'user/users_create.php';
          break;
        default :
          $file .= 'user/users.php';
          break;
      }
      break;

    case 'statistiques':
      $file .= 'stats/statistiques.php';
      break;

    default :
      $file .= '404.php';
      break;
  }

  include $file;

?>