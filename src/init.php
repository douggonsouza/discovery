<?php

use douggonsouza\request\routes;

// Adiciona routings
routes::add('default',__DIR__ . '/routing.php');
routes::add('/admin',__DIR__ . '/admin/routing.php');
routes::add('/api',__DIR__ . '/api/routing.php');
routes::add('/load',__DIR__ . '/load/routing.php');
routes::add('/logs',__DIR__ . '/logs/routing.php');
?>