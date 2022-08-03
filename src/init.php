<?php

use douggonsouza\request\routings;
use douggonsouza\benchmarck\identify;

// Adiciona routings
routings::add('default',__DIR__ . '/routing.php');
routings::add('/admin',__DIR__ . '/admin/routing.php');
routings::add('/api',__DIR__ . '/api/routing.php');
routings::add('/load',__DIR__ . '/load/routing.php');
routings::add('/logs',__DIR__ . '/logs/routing.php');
?>