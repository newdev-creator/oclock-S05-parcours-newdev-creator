<?php
namespace sonic\app\Models;

use \sonic\app\Utils\Database;
use \PDO;
/**
description	text NULL	La description du personnage
picture	varchar(128) NULL	L'URL de l'image du personnage
type_id	int(10) unsigned	

 */

class Charactere extends CoreModel {
    private $description;
    private $picture;
    private $type_id;

    public function findAll()
    {
        $pdo = Database::getPDO();
        $sql = "SELECT * FROM `character` ORDER BY `name`";
        $pdoStatement = $pdo->query($sql);
        $allCaratere = $pdoStatement->fetchAll(PDO::FETCH_CLASS,Caractere::class);
        return $allCaratere;
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

        return $this;
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

        return $this;
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

        return $this;
    }
}