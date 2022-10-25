<?php

namespace douggonsouza\discovery\models;

use douggonsouza\mvc\model\model;
use douggonsouza\propertys\propertys;
use douggonsouza\mvc\model\modelInterface;

class stepOne extends model implements modelInterface
{
    public $table = 'stepsOne';
    public $key   = 'stepOne_id';
    public $options = "SELECT stepOne_id as value, name as showName FROM stepsOne %s;";

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