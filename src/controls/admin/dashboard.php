<?php

namespace douggonsouza\discovery\controls\admin;

use douggonsouza\discovery\controls\admin\admin;
use douggonsouza\propertys\propertysInterface;
use douggonsouza\mvc\control\controllersInterface;
use douggonsouza\mvc\view\views;

// class dashboard extends admin implements actInterface
class dashboard extends admin implements controllersInterface
{
    public function main(propertysInterface $info = null)
    {
        self::attributes('nome', 'Douglas');
        return views::view(null, $info);
    }
}
?>