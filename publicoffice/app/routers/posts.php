<?php

use \App\Controllers\PostsController;

include_once '../app/controllers/postsController.php';

switch ($_GET['posts']):
    case 'show':
        PostsController\showAction($conn, $_GET['id']);
        break;
    case 'addform':
        PostsController\addAction($conn);
        break;
    case 'insert':
        PostsController\insertAction($conn, $_POST, $_FILES);
        break;
    default:
        PostsController\indexAction($conn);
        break;
endswitch;