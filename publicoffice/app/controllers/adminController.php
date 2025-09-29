<?php

namespace App\Controllers\AdminController;

use \PDO;
use \App\Models\AdminModel;

function loginFormAction()
{
    global $content, $title;
    $title = "User Connection";
    ob_start();
    include '../app/views/admin/loginForm.php';
    $content = ob_get_clean();
}

function loginAction(PDO $conn, array $data)
{
    include_once '../app/models/adminModel.php';
    // Récupérer le user correspondant dans $user
    $user = AdminModel\findOneByEmailAndPassword($conn, $data);

    // Si on a un user on redirige vers le backoffice
    if ($user):
        // On lui met un badge et on le fait entrer
        $_SESSION['user'] = $user;
        header('Location: ' . ADMIN_BASE_URL . 'dashboard');
    // Sinon on redirige vers le formulaire de connexion
    else:
        header('Location: ' . PUBLIC_BASE_URL . 'users/login-form');
    endif;
}
