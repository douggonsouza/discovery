<?php

use douggonsouza\request\routings;
use douggonsouza\benchmarck\identify;
use douggonsouza\routes\router;
use douggonsouza\request\requested;
use douggonsouza\routes\dicionary;
use douggonsouza\propertys\propertys;
use douggonsouza\mvc\model\connection\conn;
use douggonsouza\benchmarck\benchmarck;
use douggonsouza\language\language;
use douggonsouza\request\usages;

define('DEFAULT_LANGUAGE', BASE_DIR . '/vendor/douggonsouza/benchmarck/src/languages/pt-br.php');
define('DEFAULT_CONFIGS_BENCHMARCK', BASE_DIR . '/vendor/douggonsouza/benchmarck/src/configs.php');

// Adiciona routings
routings::add('default',__DIR__ . '/routing.php');
routings::add('/admin/',__DIR__ . '/routing.php');
routings::add('/api/'  ,__DIR__ . '/routing.php');

// conexão com o banco
conn::connection('localhost','douggonsouza','Ds@468677','discovery');

// adiciona configurações blocos benchmarck
$benchmarck = router::benchmarck(new benchmarck(new language(array(
    'pt-br' => DEFAULT_LANGUAGE
))));
$benchmarck::setIdentify(new identify(DEFAULT_CONFIGS_BENCHMARCK));

// route
router::dicionary(new dicionary());
requested::routing(router::usages(requested::usages(new usages(new dicionary()))));
?>