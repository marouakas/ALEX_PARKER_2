<?php
// Charger le modèle des catégories
include_once '../app/models/categoriesModel.php';
$categories = \App\Models\CategoriesModel\findAll($conn);


// ROUTES DES ADMIN
if (isset($_GET['admin'])) :
    include_once '../app/routers/admin.php';

// ROUTES DES POSTS
elseif (isset($_GET['posts'])) :
    include_once '../app/routers/posts.php';

// ROUTE PAR DÉFAUT
else:
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($conn);
endif;