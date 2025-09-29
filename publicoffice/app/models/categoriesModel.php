<?php

namespace App\Models;

use \PDO;


function findAll(PDO $conn): array
{
    $sql = "SELECT * FROM categories ORDER BY name ASC;";
    $rs = $conn->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findAllWithCount(PDO $conn): array
{
    $sql = "SELECT c.id, c.name, COUNT(p.id) AS total_posts
            FROM categories c
            LEFT JOIN posts p ON p.category_id = c.id
            GROUP BY c.id, c.name
            ORDER BY c.name ASC;";
    $rs = $conn->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}