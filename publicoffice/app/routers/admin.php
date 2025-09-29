<?php

use \App\Controllers\AdminController;

include_once '../app/controllers/adminController.php';

switch ($_GET['admin']):
    case 'login':
        AdminController\loginAction($conn, [
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ]);
        break;
    default:
        AdminController\loginFormAction();
        break;
endswitch;
