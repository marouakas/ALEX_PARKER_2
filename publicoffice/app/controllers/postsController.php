<?php

namespace App\Controllers\PostsController;

use \PDO;
use \App\Models\PostsModel;


// Liste des derniers posts (page d'accueil)
function indexAction(PDO $conn): void
{
    include_once '../app/models/postsModel.php';
    include_once '../app/models/categoriesModel.php';

    // Récupérer les 10 derniers posts
    $posts = PostsModel\findAll($conn);

    

    global $content, $title;
    // titre de la page
    $title = "Alex Parker - Blog";
    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();
}

// Détails d'un post
function showAction(PDO $conn, string $id): void
{
    include_once '../app/models/postsModel.php';
   

    $post = PostsModel\findOneById($conn, $id);

   
   
    global $content, $title;
     $title = "Alex Parker - " . $post['title'] ;
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();


 
}

// Formulaire d'ajout

function addAction(PDO $conn): void
{
  

 include_once '../app/models/postsModel.php';

   

    global $content, $title;
    $title = "Alex Parker - Add a post";

    // Affichage de la vue
    ob_start();
    include '../app/views/posts/addpost.php'; // formulaire d'ajout
    $content = ob_get_clean();

    include '../app/views/templates/default.php';
}


function insertAction(PDO $conn, array $data, array $files)
{
    include_once '../app/models/postsModel.php';

    // On appelle le modèle pour créer le post
    $response = PostsModel::create($conn, $data, $files);

    // Redirection vers la liste des posts
    header('Location: /');
}