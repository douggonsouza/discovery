<?php

namespace douggonsouza\discovery\controls\admin;

use douggonsouza\discovery\controls\admin\admin;
use douggonsouza\propertys\propertysInterface;
use douggonsouza\mvc\control\controllersInterface;
use douggonsouza\mvc\view\views;
use douggonsouza\discovery\models\accessPage;

class accesses extends admin implements controllersInterface
{
    /**
     * main - Method default
     *
     * @param  propertysInterface $info
     * @return void
     */
    public function main(propertysInterface $info = null)
    {
        if(isset($info->POST) && $info->POST['pub_key'] == 'UMOhZ2luYXMgRG8gQWNlc3Nv'){
        
        }

        return views::view('dashboardPageContainerMainContentAccessesPagesBlock', $info);
    }

    /**
     * Method pagesOfAccess - 
     *
     * @param propertysInterface $info 
     *
     * @return mixed
     */
    public function pagesOfAccess(propertysInterface $info)
    {
        $params = array();
        
        // filtra opções
        $request = array_filter(explode('/', $info->REQUEST));
        $accessId = $info->PARAMSREQUEST[0][2];

        $pages = (new accessPage())->pages((int) $accessId);
        if(!empty($pages)){
            $params = $pages;
        }

        return views::json($params);
    }
}
?>