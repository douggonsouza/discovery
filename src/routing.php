<?php

use douggonsouza\routes\router;
use douggonsouza\request\requested;
use douggonsouza\routes\dicionary;
use douggonsouza\propertys\propertys;
use douggonsouza\mvc\model\connection\conn;
use douggonsouza\benchmarck\benchmarck;
use douggonsouza\benchmarck\identify;
use douggonsouza\language\language;

/** conexão com o banco */
conn::connection('localhost','douggonsouza','Ds@468677','discovery');

//Adiciona configurações blocos benchmarck

$identify = new identify();
$identify::add('login', '/blocks/login/loginFrame.phtml', '\\discovery\\controls\\login:loginFrame');
$identify::add('defaultLayout', '/layouts/default.phtml');

$identify::add('dashboard', '/layouts/dashboard.phtml');
$identify::add('dashboardCssBlock', '/blocks/dashboardCssBlock.phtml');
$identify::add('dashboardHeaderMobileBlock', '/blocks/dashboardHeaderMobileBlock.phtml');
$identify::add('dashboardMenuSidebarBlock', '/blocks/dashboardMenuSidebarBlock.phtml');
$identify::add('dashboardPageContainerBlock', '/blocks/dashboardPageContainerBlock.phtml');
$identify::add('dashboardPageContainerHeaderDesktopBlock', '/blocks/dashboardPageContainerHeaderDesktopBlock.phtml');
$identify::add('dashboardPageContainerMainContentBlock', '/blocks/dashboardPageContainerMainContentBlock.phtml');
$identify::add('dashboardJsBlock', '/blocks/dashboardJsBlock.phtml');

$identify::add('dashboard1', '/layouts/dashboard1.phtml');
$identify::add('dashboard1CssBlock', '/blocks/dashboard1CssBlock.phtml');
$identify::add('dashboard1MenuSidebarBlock', '/blocks/dashboard1MenuSidebarBlock.phtml');
$identify::add('dashboard1PageContainerBlock', '/blocks/dashboard1PageContainerBlock.phtml');
$identify::add('dashboard1PageContainerHeaderWrapBlock', '/blocks/dashboard1PageContainerHeaderWrapBlock.phtml');
$identify::add('dashboard1PageContainerMenuSidebarBlock', '/blocks/dashboard1PageContainerMenuSidebarBlock.phtml');
$identify::add('dashboard1PageContainerHeaderDesktopBlock', '/blocks/dashboard1PageContainerHeaderDesktopBlock.phtml');
$identify::add('dashboard1PageContainerBreakcrumbBlock', '/blocks/dashboard1PageContainerBreakcrumbBlock.phtml');
$identify::add('dashboard1PageContainerStatisticBlock', '/blocks/dashboard1PageContainerStatisticBlock.phtml');
$identify::add('dashboard1PageContainerRecentReport2Block', '/blocks/dashboard1PageContainerRecentReport2Block.phtml');
$identify::add('dashboard1PageContainerTaskProgressBlock', '/blocks/dashboard1PageContainerTaskProgressBlock.phtml');
$identify::add('dashboard1PageContainerUserDataBlock', '/blocks/dashboard1PageContainerUserDataBlock.phtml');
$identify::add('dashboard1PageContainerMapDataBlock', '/blocks/dashboard1PageContainerMapDataBlock.phtml');
$identify::add('dashboard1PageContainerCopyrightBlock', '/blocks/dashboard1PageContainerCopyrightBlock.phtml');
$identify::add('dashboard1JsBlock', '/blocks/dashboard1JsBlock.phtml');

$identify::add('dashboard2', '/layouts/dashboard2.phtml');
$identify::add('dashboard2CssBlock', '/blocks/dashboard2CssBlock.phtml');
$identify::add('dashboard2HeaderDesktopBlock', '/blocks/dashboard2HeaderDesktopBlock.phtml');
$identify::add('dashboard2HeaderMobileBlock', '/blocks/dashboard2HeaderMobileBlock.phtml');
$identify::add('dashboard2HeaderMobileToolBlock', '/blocks/dashboard2HeaderMobileToolBlock.phtml');
$identify::add('dashboard2PageContentBlock', '/blocks/dashboard2PageContentBlock.phtml');
$identify::add('dashboard2PageContentBreadcrumbBlock', '/blocks/dashboard2PageContentBreadcrumbBlock.phtml');
$identify::add('dashboard2PageContentWelcomeBlock', '/blocks/dashboard2PageContentWelcomeBlock.phtml');
$identify::add('dashboard2PageContentStatisticBlock', '/blocks/dashboard2PageContentStatisticBlock.phtml');
$identify::add('dashboard2PageContentStatisticChartBlock', '/blocks/dashboard2PageContentStatisticChartBlock.phtml');
$identify::add('dashboard2PageContentDataTableBlock', '/blocks/dashboard2PageContentDataTableBlock.phtml');
$identify::add('dashboard2PageContentCopyrightBlock', '/blocks/dashboard2PageContentCopyrightBlock.phtml');
$identify::add('dashboard2JsBlock', '/blocks/dashboard2JsBlock.phtml');


/** roteamento da requisição */
router::usages(requested::getUsages(), new propertys(array()));
router::dicionary(new dicionary());
$benchmarck = router::benchmarck(new benchmarck(new language(array(array(
    'local' => BASE_DIR . '/vendor/douggonsouza/benchmarck/vendor/douggonsouza/language/src/pt-br.php',
    'language' => 'pt-br'
)))));
$benchmarck::setIdentify($identify);

router::routing('GET', '/', "\\discovery\\controls\\login");
router::routing('GET', '/login', "\\discovery\\controls\\login");
?>
