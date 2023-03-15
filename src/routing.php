<?php

use douggonsouza\routes\router;
use douggonsouza\discovery\controls\admin\dashboard;
use douggonsouza\permission\controls\permissions;
use douggonsouza\discovery\controls\login;
use douggonsouza\discovery\controls\register;
use douggonsouza\discovery\controls\forgetpass;

use douggonsouza\discovery\controls\admin\accesses;

router::routing(
    'GET', 
    "/", 
    new login('login', null)
);
router::routing(
    'POST', 
    "/", 
    new login('login', null)
);
router::routing(
    'GET', 
    "/login", 
    new login('login', null)
);
router::routing(
    'POST', 
    "/login", 
    new login('login', null)
);
router::routing(
    'GET', 
    "/register", 
    new register('register', null)
);
router::routing(
    'POST', 
    "/register", 
    new register('register', null)
);
router::routing(
    'GET', 
    "/forgetpass", 
    new forgetpass('forgetpass', null)
);
router::routing(
    'GET', 
    "/admin/dashboard", 
    new dashboard('dashboard2', PAGE_DASHBOARD2)
);
router::routing(
    'POST', 
    "/admin/dashboard", 
    new dashboard(PAGE_DASHBOARD2,'dashboard2')
);
router::routing(
    'GET', 
    "/admin/permission", 
    new permissions('dashboard2', PAGE_PERMISSION)
);
router::routing(
    'POST', 
    "/admin/permission", 
    new permissions('dashboard2', PAGE_PERMISSION)
);
router::routing(
    'POST', 
    "/api/pagesofaccess/_number/json", 
    new accesses('dashboard',null),
    'pagesOfAccess'
);

router::end('404');
?>
