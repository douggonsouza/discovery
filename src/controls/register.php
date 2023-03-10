<?php

namespace douggonsouza\discovery\controls;

use douggonsouza\routes\router;
use douggonsouza\mvc\control\controllers;
use douggonsouza\mvc\control\controllersInterface;
use douggonsouza\propertys\propertysInterface;
use douggonsouza\logged\models\user;
use douggonsouza\benchmarck\benchmarck;

class register extends controllers implements controllersInterface
{
    protected $layout = 'register';

    public function main(propertysInterface $info = null)
    {
        if(isset($info->POST) && $info->POST['pub_key'] == 'cmVnaXN0ZXJfZm9ybQ=='){
            $user = new user();
            $info->POST['password'] = md5($info->POST['password']);
            $user->populate($info->POST);
            if($user->save()){
                router::alerts()::set('Usuário registrado com sucesso.');
                return $this->identified('', $info, 'login');
            }
            
            router::alerts()::set('Erro no registro do usuário.', benchmarck::BADGE_DANGER);
        }

        return $this->identified('', $info);
    }
}
?>