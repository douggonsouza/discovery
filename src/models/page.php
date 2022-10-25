<?php

namespace douggonsouza\discovery\models;

use douggonsouza\mvc\model\model;
use douggonsouza\propertys\propertys;
use douggonsouza\mvc\model\modelInterface;

class page extends model implements modelInterface
{
    public $table = 'pages';
    public $key   = 'page_id';
    public $options = "SELECT page_id as value, showName as label FROM pages %s;";

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