<?php


namespace App\Model\Database;

use PDO;

class MessageManager extends Manager {

    public function sendMessage($author, $mail, $content){
        $send = $this->prepare("
        INSERT INTO pf_message(message_author, message_mail, message_content, message_date)
        VALUES (?,?,?,NOW())
        ");
        $send->execute([$author, $mail, $content]);
    }

    public function getMessage($status){
        $rq = $this->prepare("
        SELECT message_id as id, 
               message_date as date, 
               message_author as author, 
               message_content as content, 
               message_mail as mail
        FROM pf_message
        WHERE message_status = $status
        ORDER BY message_id
        ");

        $rq->execute();

        $rq->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'App\Model\Message');
        $messages = $rq->fetchAll();

        return $messages;
    }

    public function updateStatus($status, $id)
    {
        $rq = $this->prepare("
            UPDATE pf_message
            SET message_status = ?
            WHERE message_id = ?
        ");
        $rq->execute([$status, $id ]);
    }
}