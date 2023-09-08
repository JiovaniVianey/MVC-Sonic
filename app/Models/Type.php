<?php

namespace App\Models;

use App\Utils\Database;
use PDO; // on utilise la classe PDO dont le namespace a été défini

class Type extends CoreModel
{
    /**
     * Récupère tous les types (table type) depuis la bdd
     * Retourne une liste d'objet (instances de la classe Type => le model ou on est)
     */
    public function findAll()
    {
        $sql = "SELECT * FROM type";
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Type::class);

        return $products;
    }
}
