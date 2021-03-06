<?php

namespace discovery\controls;

use douggonsouza\mvc\control\act;
use douggonsouza\propertys\propertys;
use douggonsouza\mvc\control\actInterface;
use douggonsouza\propertys\propertysInterface;

class login extends act implements actInterface
{

    public function main(propertysInterface $info)
    {
        return $this->layout('/default.phtml', $info);
    }

    public function loginFrame(propertysInterface $info)
    {
        return $this->block('/login/loginFrame.phtml');
    }
}
?>