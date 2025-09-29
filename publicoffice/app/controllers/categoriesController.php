<?php

namespace App\Controllers\CategoriesController;

use \PDO;
use App\Models\CategoriesModel;

// Liste des catégories (pour la sidebar)
function indexAction(PDO $conn): array
{
    // Récupérer toutes les catégories avec le nombre de posts (bonus)
    $categories = 
\App\Models\findAllWithCount($conn);
    return $categories;
}
