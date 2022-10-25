<?php

namespace douggonsouza\discovery\models;

use douggonsouza\mvc\model\model;
use douggonsouza\propertys\propertys;
use douggonsouza\mvc\model\modelInterface;

class access extends model implements modelInterface
{
    public $table = 'accesses';
    public $key   = 'access_id';
    public $options = "SELECT access_id as value, name as label FROM accesses %s;";

    /**
     * options
     *
     * @return void
     */
    public function options(array $where = null)
    {
        return parent::options($where);
    }

    /**
     * Get the value of table
     */ 
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Get the value of key
     */ 
    public function getKey()
    {
        return $this->key;
    }
}
?>