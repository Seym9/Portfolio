<?php


namespace App\Model\Database;


use PDO;

class UserManager extends Manager
{
    public function getUser($username){
        $rq = $this->prepare("
        SELECT user_id as id, 
               user_name as username, 
               user_password as password, 
               user_status as status
        FROM pf_user
        WHERE user_name = ?
        ");

        $rq->execute([$username]);

        $rq->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'App\Model\User');
        $user = $rq->fetch();

        return $user;
    }
}