
<?php

switch($loc){
    case 'recette' : 
     
      switch ($action) {
        case 'edit':
          include('app/view/content_recette_edition.php'); 
          break;
          case 'creation':
            include('app/view/content_recette_creation.php'); 
            break;

        default:
             include('app/view/content_recette.php'); 
          break;
      }
      break;
    case 'about' :
      include('./content/about_content.php');
      break;
    case 'product' :
      include('./content/product_content.php');
      break;
    // case 'store' :
    //   include('./content/store_content.php');
    //   break;
    // case 'comment':
    //   include("content/comment_content.php");
    //     break;
    // case 'read':
    //   include("content/read_comment_content.php");
    //       break;
    default : 
      include("content/404.php");
          break;
  }
  
  ?>
