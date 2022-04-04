<?php

use douggonsouza\routes\router;
use douggonsouza\request\requested;
use douggonsouza\routes\dicionary;
use douggonsouza\propertys\propertys;
use douggonsouza\mvc\model\connection\conn;
use douggonsouza\benchmarck\benchmarck;

/** conexão com o banco */
conn::connection('localhost','douggonsouza','Ds@468677','discovery');

/** roteamento da requisição */
router::usages(requested::getUsages(), new propertys(array()));
router::dicionary(new dicionary());
router::benchmarck(new benchmarck());

router::routing('GET', '/', "\\discovery\\controls\\login");
router::routing('GET', '/login', "\\discovery\\controls\\login");
?>