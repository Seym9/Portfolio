<?php


namespace App\Controller;


use App\Model\Database\MessageManager;
use function header;

class MessageController extends MainController {

    public function sendMessage(){
        $send = new MessageManager();
        $send->sendMessage($_POST['author'], $_POST['mail'], $_POST['content']);

        header('Location: index.php');
        exit();
    }


    public function getMessage(){

        if ($_SESSION['status'] === 'ADMIN') {
            $title = 'admin';
            $objMessages = new MessageManager();
            
            if ($_GET['message'] === 'new'){
                $messages = $objMessages->getMessage(1);
                $this->render(['admin/adminHome'], compact('messages', 'title'));
            }
            if ($_GET['message'] === 'read'){
                $messages = $objMessages->getMessage(2);
                $this->render(['admin/adminHome'], compact('messages', 'title'));
            }
            if ($_GET['message'] === 'delete'){
                $messages = $objMessages->getMessage(3);
                $this->render(['admin/adminHome'], compact('messages', 'title'));
            }


        }else {
            header('Location: index.php?p=login');
        }
    }

    public function updateStatus() {

        if ($_SESSION['status'] === 'ADMIN') {
            $message = new MessageManager();
            $message->updateStatus($_GET['status'], $_GET['id']);

            header('Location: index.php?p=admin&message=new');
        }else{
            header('Location: index.php?p=login&message=new');
        }
    }
}