<?php

use \App\Controllers\PostsController;

include_once '../app/controllers/postsController.php';

switch ($_GET['posts']):
    case 'show':
        PostsController\showAction($conn, (int)$_GET['id']);
        break;
    
    case 'addform':
        PostsController\addFormAction($conn);
        break;
    
    case 'insert':
        PostsController\insertAction($conn, $_POST);
        break;
    
    case 'editform':
        PostsController\editFormAction($conn, (int)$_GET['id']);
        break;
    
    case 'update':
        PostsController\updateAction($conn, (int)$_GET['id'], $_POST);
        break;
    
    case 'delete':
        PostsController\deleteAction($conn, (int)$_GET['id']);
        break;
    
    default:
        PostsController\indexAction($conn);
        break;
endswitch;