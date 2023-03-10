<?php

namespace douggonsouza\discovery\controls\admin;

use douggonsouza\mvc\control\actInterface;
use douggonsouza\propertys\propertysInterface;
use douggonsouza\discovery\controls\admin\admin;
use douggonsouza\discovery\models\accessPage;
use douggonsouza\benchmarck\benchmarck;
use douggonsouza\routes\router;

class accessesPages extends admin implements actInterface
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
        if(isset($info->POST) && $info->POST['pub_key'] == 'UMOhZ2luYXMgRG8gQWNlc3Nv'){
            // desativa todas as linhas para o acesso
            if(count($info->POST['page_id']) > 0){
                $accesspage = new accessPage();
                $accesspage->search(array(
                    'access_id' => $info->POST['access_id']
                ));
                if($accesspage->exist()){
                    while(!$accesspage->isEof()){
                        $accesspage->populate(array(
                            'active' => 'no'
                        ));

                        if(!$accesspage->save()){
                            router::alerts()::set('Erro no registro do acesso ' . $info->POST['access_id'] . '.', benchmarck::BADGE_DANGER);
                        }

                        $accesspage->next();
                    } 
                }
            }

            // registra página
            foreach($info->POST['page_id'] as $item){
                $accesspage = new accessPage();
                if(!($accesspage->search(array(
                    'page_id' => $item,
                    'access_id' => $info->POST['access_id']
                )))->exist()){
                    $accesspage->populate(array(
                        'page_id' => $item,
                        'access_id' => $info->POST['access_id']
                    ));

                    if(!$accesspage->save()){
                        router::alerts()::set('Erro no registro da acessão ' . $info->POST['access_id'] . ' e página ' . $item . '.', benchmarck::BADGE_DANGER);
                    }
                    continue;
                }

                $accesspage->populate(array(
                    'active' => 'yes'
                ));

                if(!$accesspage->save()){
                    router::alerts()::set('Erro no registro do acesso ' . $info->POST['access_id'] . ' e página ' . $item . '.', benchmarck::BADGE_DANGER);
                }
            }
        }

        return $this->identified('dashboardPageContainerMainContentAccessesPagesBlock', $info);
    }
}
?>