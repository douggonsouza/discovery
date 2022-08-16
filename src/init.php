<?php

use douggonsouza\request\routings;
use douggonsouza\benchmarck\identify;

// Adiciona routings
routings::add('default',__DIR__ . '/routing.php');
routings::add('/admin/',__DIR__ . '/routing.php');
routings::add('/api/'  ,__DIR__ . '/routing.php');
?>