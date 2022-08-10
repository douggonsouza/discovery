<?php

use douggonsouza\routes\router;
use douggonsouza\request\requested;
use douggonsouza\routes\dicionary;
use douggonsouza\propertys\propertys;
use douggonsouza\mvc\model\connection\conn;
use douggonsouza\benchmarck\benchmarck;
use douggonsouza\benchmarck\identify;
use douggonsouza\language\language;

define('DEFAULT_LANGUAGE', BASE_DIR . '/vendor/douggonsouza/benchmarck/vendor/douggonsouza/language/src/pt-br.php');
define('DEFAULT_CONFIGS_BENCHMARCK', BASE_DIR . '/vendor/douggonsouza/benchmarck/src/configs.php');

// conexão com o banco
conn::connection('localhost','douggonsouza','Ds@468677','discovery');

// adiciona configurações blocos benchmarck
router::usages(requested::getUsages(), new propertys(array()));
router::dicionary(new dicionary());
$benchmarck = router::benchmarck(new benchmarck(new language(array(
    'pt-br' => DEFAULT_LANGUAGE
))));
$benchmarck::setIdentify(new identify(DEFAULT_CONFIGS_BENCHMARCK));

// roteamento da requisição
router::routing('GET', '/', "\\discovery\\controls\\login");
router::routing('GET', '/login', "\\discovery\\controls\\login");
?>
