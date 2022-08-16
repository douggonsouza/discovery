<?php

namespace douggonsouza\discovery\controls;

use douggonsouza\mvc\control\act;
use douggonsouza\mvc\control\actInterface;
use douggonsouza\propertys\propertysInterface;
use douggonsouza\discovery\models\user;

class register extends act implements actInterface
{
    public function main(propertysInterface $info)
    {
        if(isset($info->POST) && $info->POST['pub_key'] == 'cmVnaXN0ZXJfZm9ybQ=='){
            $user = new user();
            $info->POST['password'] = md5($info->POST['password']);
            $user->populate($info->POST);
            if($user->save()){
                return $this->identified('login', $info);
            }
            // ALERT
        }

        return $this->identified('register', $info);
    }
}
?>