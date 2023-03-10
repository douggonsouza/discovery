<?php

use douggonsouza\routes\router;
use douggonsouza\discovery\controls\admin\dashboard;
use douggonsouza\permission\controls\permissions;

// roteamento da requisição
router::routing(
    'GET', 
    "/", 
    "\\douggonsouza\\discovery\\controls\\login"
);

router::routing(
    'POST', 
    "/", 
    "\\douggonsouza\\discovery\\controls\\login"
);

router::routing(
    'GET', 
    "/login", 
    "\\douggonsouza\\discovery\\controls\\login"
);

router::routing(
    'POST', 
    "/login", 
    "\\douggonsouza\\discovery\\controls\\login"
);

router::routing(
    'GET', 
    "/register", 
    "\\douggonsouza\\discovery\\controls\\register"
);

router::routing(
    'POST', 
    "/register", 
    "\\douggonsouza\\discovery\\controls\\register"
);

router::routing(
    'GET', 
    "/forgetpass", 
    "\\douggonsouza\\discovery\\controls\\forgetpass"
);

router::control(
    'GET', 
    "/admin/dashboard", 
    new dashboard(PAGE_DASHBOARD2,'dashboard2')
);

router::control(
    'POST', 
    "/admin/dashboard", 
    new dashboard(PAGE_DASHBOARD2,'dashboard2')
);

router::control(
    'GET', 
    "/admin/permission", 
    new permissions(PAGE_PERMISSION,'dashboard2')
);

router::control(
    'POST', 
    "/admin/permission", 
    new permissions(PAGE_PERMISSION,'dashboard2')
);

// router::path(
//     'GET', 
//     "/admin/permission", 
//     "\\douggonsouza\\permission\\controls\\permissions", 
//     PERMISSION
// );

// router::path(
//     'POST', 
//     "/admin/permission", 
//     "\\douggonsouza\\permission\\controls\\permissions", 
//     PERMISSION
// );

router::routing(
    'POST', 
    "/api/pagesofaccess/_number/json", 
    "\\douggonsouza\\discovery\\controls\\admin\\accesses:pagesOfAccess"
);

router::end('404');
?>
