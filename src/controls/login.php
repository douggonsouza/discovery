<?php

namespace discovery\controls;

use douggonsouza\mvc\control\act;
use douggonsouza\propertys\propertys;
use douggonsouza\mvc\control\actInterface;
use douggonsouza\propertys\propertysInterface;

class login extends act implements actInterface
{
    const PAGE_CONTENT = BASE_DIR . '/vendor/douggonsouza/benchmarck/src/blocks/dashboardPageContainerBlock.phtml';

    public function main(propertysInterface $info)
    {
        // $this->setPage(self::PAGE_CONTENT);
        return $this->identified('register', $info);
    }
}
?>