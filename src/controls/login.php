<?php

namespace douggonsouza\discovery\controls;

use douggonsouza\mvc\control\act;
use douggonsouza\routes\router;
use douggonsouza\mvc\control\actInterface;
use douggonsouza\propertys\propertysInterface;
use douggonsouza\logged\models\user;
use douggonsouza\logged\logged;
use douggonsouza\benchmarck\benchmarck;

class login extends act implements actInterface
{
    protected $identifyLayout = 'login';

    public function main(propertysInterface $info)
    {
        if(isset($info->POST) && $info->POST['pub_key'] == 'bG9naW5fZm9ybQ=='){
            $user = new user();
            $user->search(array(
                'email' => $info->POST['email'],
                'password' => md5($info->POST['password'])
            ));

            if(!$user->exist()){
                router::alerts()::set('Não encontrado usuário para a senha.', benchmarck::BADGE_DANGER); 
                return $this->identified('', $info, 'login');
            }

            if(!logged::in($user->info())){
                router::alerts()::set('Erro no login do usuário.', benchmarck::BADGE_DANGER);
            };

            router::alerts()::set('Usuário registrado com sucesso.');
            return router::redirect("/admin/dashboard/", $info);
        }

        return $this->identified('', $info);
    }
}
?>