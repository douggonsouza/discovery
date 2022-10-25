<?php

namespace douggonsouza\discovery\controls\admin;

use douggonsouza\mvc\control\actInterface;
use douggonsouza\propertys\propertysInterface;
use douggonsouza\discovery\controls\admin\admin;
use douggonsouza\discovery\models\page;
use douggonsouza\benchmarck\benchmarck;
use douggonsouza\routes\router;

class pages extends admin implements actInterface
{
    protected $layout = 'dashboard';

    /**
     * main - Method default
     *
     * @param  propertysInterface $info
     * @return void
     */
    public function main(propertysInterface $info)
    {
        if(isset($info->POST) && $info->POST['pub_key'] == 'UmVnaXN0cmFyIFDDoWdpbmE='){
            $page = new page();
            $page->populate($info->POST);
            if($page->save()){
                router::alerts()::set('Erro no registro da página.', benchmarck::BADGE_DANGER);
            }
            router::alerts()::set('Página registrada com sucesso.');
        }

        return $this->identified('dashboardPageContainerMainContentNewPageBlock', $info);
    }
    
    /**
     * read - Carrega uma página e seus dados
     *
     * @param  propertysInterface $info
     * @return void
     */
    public function read(propertysInterface $info)
    {
        if(isset($info->POST) && $info->POST['pub_key'] == 'UmVnaXN0cmFyIFDDoWdpbmE='){

        }

        return $this->identified('dashboardPageContainerMainContentNewPageBlock', $info);
    }
}
?>