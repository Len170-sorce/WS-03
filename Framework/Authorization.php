<?php 


namespace Framework; 

use Framework\Session;

class Authorization {
    /**
     * Check if log in user owns a listing 
     * 
     * @params int $resourceId
     * @return bool 
     */

    public function isOwner($resurceId){
        $sessionUser = Session::get('user');

        if($sessionUser !== null && isset ($sessionUser['id'])){
            $sessionUser = (int) $sessionUser['id'];
            return $sessionUser === $resurceId;
        }

        return false;
    }
}