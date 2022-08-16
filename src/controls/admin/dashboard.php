<?php

namespace douggonsouza\discovery\controls\admin;

use douggonsouza\routes\router;
use douggonsouza\mvc\control\act;
use douggonsouza\mvc\control\actInterface;
use douggonsouza\propertys\propertysInterface;
use douggonsouza\logged\logged;
use douggonsouza\discovery\controls\admin\admin;

class dashboard extends admin implements actInterface
{
    const PAGE_CONTENT = BASE_DIR . '/vendor/douggonsouza/benchmarck/src/blocks/dashboardPageContainerBlock.phtml';

    public function main(propertysInterface $info)
    {
        $this->setPage(self::PAGE_CONTENT);
        return $this->identified('dashboard', $info);
    }
}
?>