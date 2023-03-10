<?php

namespace douggonsouza\discovery\controls\admin;

use douggonsouza\mvc\control\actInterface;
use douggonsouza\propertys\propertysInterface;
use douggonsouza\discovery\controls\admin\admin;
use douggonsouza\discovery\models\stepOne;
use douggonsouza\benchmarck\benchmarck;
use douggonsouza\routes\router;

class stepsOne extends admin implements actInterface
{
    protected $layout = 'dashboard';

    /**
     * main - Method default
     *
     * @param  propertysInterface $info
     * @return void
     */
    public function main(propertysInterface $info = null)
    {
        if(isset($info->POST) && $info->POST['pub_key'] == 'UHJpbWVpcm8gTsOtdmVs'){
            $stepOne = new stepOne();
            $stepOne->populate($info->POST);
            if($stepOne->save()){
                router::alerts()::set('Erro no registro do nível.', benchmarck::BADGE_DANGER);
            }
            router::alerts()::set('Nível registrado com sucesso.');
        }

        return $this->identified('dashboardPageContainerMainContentStepOneBlock', $info);
    }
    
    /**
     * read - Carrega uma página e seus dados
     *
     * @param  propertysInterface $info
     * @return void
     */
    public function read(propertysInterface $info)
    {
        // if(isset($info->POST) && $info->POST['pub_key'] == 'UHJpbWVpcm8gTsOtdmVs'){

        // }

        return $this->identified('dashboardPageContainerMainContentStepOneBlock', $info);
    }
}
?>