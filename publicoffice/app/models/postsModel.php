<?php

namespace App\Models\PostsModel;

use \PDO;

function findAll(PDO $conn, int $limit = 10): array
{
    
    $sql = "SELECT *
            FROM posts
            ORDER BY created_at DESC
            LIMIT $limit;";

    $rs = $conn->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $conn, int $id): array
{
    $sql = "SELECT *
            FROM posts
            WHERE id = :id;";

    $rs = $conn->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();

    return $rs->fetch(PDO::FETCH_ASSOC);
}

namespace App\Models\PostsModel;

use \PDO;

// Fonction pour récupérer toutes les catégories
function getCategories(PDO $conn): array
{
    // Requête SQL pour récupérer toutes les catégories triées par nom
    $sql = "SELECT * FROM categories ORDER BY name ASC";

    // Exécution de la requête
    $rs = $conn->query($sql);

    // Retourne le résultat sous forme de tableau associatif
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function create(PDO $conn, array $data)
{
    $sql = "INSERT INTO posts
            SET
            title = :title,
            text = :text,
            quote = :quote,
            category_id = :category_id,
            image = :image,
            created_at = NOW()";

    $rs = $conn->prepare($sql);
    $rs->bindValue(':title', $data['title'], PDO::PARAM_STR);
    $rs->bindValue(':text', $data['text'], PDO::PARAM_STR);
    $rs->bindValue(':quote', $data['quote'], PDO::PARAM_STR);
    $rs->bindValue(':category_id', $data['category_id'], PDO::PARAM_INT);
    $rs->bindValue(':image', $data['image'], PDO::PARAM_STR); // ici, tu passes juste le nom du fichier déjà traité

    return $rs->execute();
}
