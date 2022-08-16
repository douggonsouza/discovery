<?php

namespace douggonsouza\discovery\controls\admin;

use douggonsouza\routes\router;
use douggonsouza\mvc\control\act;
use douggonsouza\mvc\control\actInterface;
use douggonsouza\propertys\propertysInterface;
use douggonsouza\logged\logged;

class admin extends act implements actInterface
{
    
    /**
     * _before - Evento que antecede o carregamento da Main
     *
     * @param  mixed $info
     * @return void
     */
    public function _before(propertysInterface $info = null)
    {
        // valida se está logado
        if(!logged::is()){
            logged::out();
            router::redirect('/login/');
        }
    }

    public function main(propertysInterface $info)
    {
        return $this->identified('dashboard2', $info);
    }
}
?>