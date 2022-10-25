<?php

namespace douggonsouza\discovery\controls\admin;

use douggonsouza\mvc\control\actInterface;
use douggonsouza\propertys\propertysInterface;
use douggonsouza\discovery\controls\admin\admin;
use douggonsouza\benchmarck\benchmarck;
use douggonsouza\downloads\downloads;
use douggonsouza\mvc\control\controllers;
use douggonsouza\mvc\control\controllersInterface;

// class dashboard extends admin implements actInterface
class dashboard extends controllers implements controllersInterface
{    
    /**
     * Method __construct
     *
     * @return void
     */
    public function __construct()
    {
        self::setLayout('dashboard');
        // self::setLayout('dashboard1');
        // self::setLayout('dashboard2');
        // self::setLayout('dashboard3');
    }

    public function main(propertysInterface $info)
    {
        self::attributes()->set('nome', 'Douglas');
        return self::view('dashboardPageContainerMainContentNewPageBlock', $info);
    }
}
?>