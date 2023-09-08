<?php

/**
 * Model Product => lié à la table product en bdd
 * Il faut que la classe ait le meme nom que le fichier et premiere lettre en majuscule
 */

namespace App\Models;

use App\Utils\Database;
use PDO; // on utilise la classe PDO dont le namespace a été défini

class Character extends CoreModel
{
    // ces propriétés doivent avoir exactement le meme nom que leur homologue en BDD
    private $description;
    private $picture;
    private $type_id;

    /**
     * Récupère tous les produits (table product) depuis la bdd
     */
    public function findAll()
    {
        // Ici on créer la requete SQL qui va récupérer tous les products
        $sql = 'SELECT * FROM `character` ORDER BY `name`';

        // Ici $pdo est un objet de la classe Databse (Utils/Database.php)
        // $pdo va me permettre d'executer mes requetes sql
        $pdo = Database::getPDO();

        // ici j'execute ma requete sql ($sql) et je stock le resultat de cette requete dans $pdoStatement
        $pdoStatement = $pdo->query($sql);

        // Pour l'instant $pdoStatement n'est pas une liste d'objets Product, pour transformer $pdoStatement en liste d'objet Product (model Product) => fetchAll
        //fetchAll prend 2 param
        // 1er = En quoi on veut convertir le resultat => ici en objets
        // 2eme = Objets de quelle classe ? => La classe Product (le model ou on est actuellement)
        $characters = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Character::class);

        // On retourne le tableau d'objets Products
        return $characters;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get the value of picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * Get the value of type_id
     */
    public function getType_id()
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     *
     * @return  self
     */
    public function setType_id($type_id)
    {
        $this->type_id = $type_id;
    }
}
