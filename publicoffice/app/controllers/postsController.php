<?php

namespace App\Controllers\PostsController;

use \PDO;

function indexAction(PDO $conn): void
{
    include_once '../app/models/postsModel.php';
    include_once '../app/models/categoriesModel.php';

    $posts = \App\Models\PostsModel\findAll($conn, 10);

    global $content, $title;
    $title = "Alex Parker - Blog";
    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();
}

function showAction(PDO $conn, int $id): void
{
    include_once '../app/models/postsModel.php';

    $post = \App\Models\PostsModel\findOneById($conn, $id);

    global $content, $title;
    $title = "Alex Parker - " . $post['title'];
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}

function addFormAction(PDO $conn): void
{
    include_once '../app/models/categoriesModel.php';

    $categories = \App\Models\CategoriesModel\findAll($conn);

    global $content, $title;
    $title = "Alex Parker - Add a post";
    ob_start();
    include '../app/views/posts/form.php';
    $content = ob_get_clean();
}

function insertAction(PDO $conn, array $postData): void
{
    include_once '../app/models/postsModel.php';

    $data = [
        'title' => $postData['title'],
        'text' => $postData['text'],
        'quote' => $postData['quote'] ?? '',
        'category_id' => $postData['category_id'],
        'image' => $postData['image'] ?? ''
    ];

    \App\Models\PostsModel\create($conn, $data);

    header('Location: index.php');
    exit;
}

function editFormAction(PDO $conn, int $id): void
{
    include_once '../app/models/postsModel.php';
    include_once '../app/models/categoriesModel.php';

    $post = \App\Models\PostsModel\findOneById($conn, $id);
    $formCategories = \App\Models\CategoriesModel\findAll($conn);

    global $content, $title;
    $title = "Alex Parker - Edit a post";
    ob_start();
    include '../app/views/posts/form.php';
    $content = ob_get_clean();
}

function updateAction(PDO $conn, int $id, array $postData): void
{
    include_once '../app/models/postsModel.php';

    $post = \App\Models\PostsModel\findOneById($conn, $id);

    $data = [
        'title' => $postData['title'],
        'text' => $postData['text'],
        'quote' => $postData['quote'] ?? '',
        'category_id' => $postData['category_id'],
        'image' => $post['image']
    ];

    \App\Models\PostsModel\update($conn, $id, $data);

    header("Location: index.php?posts=show&id={$id}");
    exit;
}

function deleteAction(PDO $conn, int $id): void
{
    include_once '../app/models/postsModel.php';

    \App\Models\PostsModel\delete($conn, $id);

    header('Location: index.php');
    exit;
}
