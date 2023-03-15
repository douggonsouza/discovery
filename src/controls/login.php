<?php

namespace douggonsouza\discovery\controls;

use douggonsouza\mvc\control\controllers;
use douggonsouza\mvc\control\controllersInterface;
use douggonsouza\routes\router;
use douggonsouza\propertys\propertysInterface;
use douggonsouza\logged\models\user;
use douggonsouza\logged\logged;
use douggonsouza\benchmarck\benchmarck;
use douggonsouza\mvc\view\views;

class login extends controllers implements controllersInterface
{
    // protected $identifyLayout = 'login';

    public function main(propertysInterface $info = null)
    {
        if(isset($info->POST) && $info->POST['pub_key'] == 'bG9naW5fZm9ybQ=='){
            $user = new user(array(
                'email' => $info->POST['email'],
                'password' => md5($info->POST['password'])
            ));
            if(!$user->exist()){
                router::alerts()::set('Não encontrado usuário para a senha.', benchmarck::BADGE_DANGER); 
                return views::view('', $info, 'login');
            }

            if(!logged::in($user->info())){
                router::alerts()::set('Erro no login do usuário.', benchmarck::BADGE_DANGER);
            };

            router::alerts()::set('Usuário registrado com sucesso.');
            return router::redirect("/admin/dashboard", $info);
        }

        return views::view('', $info, 'login');
    }
}
?>