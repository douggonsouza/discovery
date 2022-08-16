<?php

namespace douggonsouza\discovery\controls;

use douggonsouza\mvc\control\act;
use douggonsouza\routes\router;
use douggonsouza\mvc\control\actInterface;
use douggonsouza\propertys\propertysInterface;
use douggonsouza\discovery\models\user;
use douggonsouza\logged\logged;

class login extends act implements actInterface
{
    public function main(propertysInterface $info)
    {
        if(isset($info->POST) && $info->POST['pub_key'] == 'bG9naW5fZm9ybQ=='){
            $user = new user();
            $user->search(array(
                'email' => $info->POST['email'],
                'password' => md5($info->POST['password'])
            ));
            if($user->getModel()){
                if(logged::in($user->info())){
                    return router::redirect("/admin/dashboard/", $info);
                };

                // mensagem de erro
            }
        }

        return $this->identified('login', $info);
    }
}
?>