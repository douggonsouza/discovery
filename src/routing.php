<?php

use douggonsouza\routes\router;
use douggonsouza\request\requested;
use douggonsouza\routes\dicionary;
use douggonsouza\propertys\propertys;
use douggonsouza\mvc\model\connection\conn;
use douggonsouza\benchmarck\benchmarck;
use douggonsouza\benchmarck\identify;

/** conexão com o banco */
conn::connection('localhost','douggonsouza','Ds@468677','discovery');

//Adiciona configurações blocos benchmarck

$identify = new identify();
$identify::add('login', '\\discovery\\controls\\login:loginFrame', '/blocks/login/loginFrame.phtml');
$identify::add('defaultLayout', null, '/layouts/default.phtml');
$identify::add('dashboard', null, '/layouts/dashboard.phtml');

/** roteamento da requisição */
router::usages(requested::getUsages(), new propertys(array()));
router::dicionary(new dicionary());
router::benchmarck(new benchmarck());
$benchmarck = router::getBenchmarck();
$benchmarck::setIdentify($identify);

router::routing('GET', '/', "\\discovery\\controls\\login");
router::routing('GET', '/login', "\\discovery\\controls\\login");
?>