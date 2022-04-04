<?php
session_start();

/**
 * DISCOVERY
 * Framework PHP de propósito genérico
 * 
 * @version 01.00000.00000
 */

use douggonsouza\request\usages;
use douggonsouza\request\routings;
use douggonsouza\request\dicionary;
use douggonsouza\request\requested;

// configs
include_once __DIR__ . '/vendor/autoload.php';
include_once __DIR__. '/src/init.php';

// routing
requested::usages(new usages(new dicionary()))->parameters(routings::get());
requested::routing();
die();
?>