<?php
namespace sonic\app\Models;
/**
id	int(10) unsigned Auto Increment	
name	varchar(64)	Le nom du type
created_at	timestamp [current_timestamp()]	La date de création du type
updated_at	timestamp NULL	La date de la dernière mise à jour du type

 */

class CoreModel {
protected $id;
protected $name;
protected $created_at;
protected $updated_at;

/**
 * Get the value of id
 */ 
public function getId()
{
return $this->id;
}

/**
 * Set the value of id
 *
 * @return  self
 
public function setId($id)
{
$this->id = $id;

return $this;
}
*/ 
/**
 * Get the value of name
 */ 
public function getName()
{
return $this->name;
}

/**
 * Set the value of name
 *
 * @return  self
 */ 
public function setName($name)
{
$this->name = $name;

return $this;
}

/**
 * Get the value of created_at
 */ 
public function getCreated_at()
{
return $this->created_at;
}

/**
 * Set the value of created_at
 *
 * @return  self
 */ 
public function setCreated_at($created_at)
{
$this->created_at = $created_at;

return $this;
}

/**
 * Get the value of updated_at
 */ 
public function getUpdated_at()
{
return $this->updated_at;
}

/**
 * Set the value of updated_at
 *
 * @return  self
 */ 
public function setUpdated_at($updated_at)
{
$this->updated_at = $updated_at;

return $this;
}
}