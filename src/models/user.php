<?php

namespace douggonsouza\discovery\models;

use douggonsouza\mvc\model\model;
use douggonsouza\propertys\propertys;

class user extends model
{
    public $table = 'users';
    public $key   = 'user_id';
    public $options = "SELECT user_id as value, name as label FROM users;";

    /**
     * options
     *
     * @return void
     */
    public function options()
    {
        return parent::options($this->options);
    }
    
    /**
     * info - Expõe os dados a serem salvos de login na sessão
     *
     * @return object
     */
    public function info()
    {
        $var = $this->getField('user_id');
        if(!isset($var)){
            return null;
        }

        return new propertys(
            array(
                'user_id' => $this->getField('user_id'),
                'name' => $this->getField('name'),
                'email' => $this->getField('email'),
                'birthday' => $this->getField('birthday'),
                'school' => $this->getField('school'),
                'office' => $this->getField('office')
            )
        );
    }
}

?>