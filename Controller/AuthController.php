<?php


namespace App\Controller;


use App\Model\Database\UserManager;


class AuthController extends MainController {

    public function login()
    {
        if (isset($_POST['login']) && isset($_POST['pass'])) {
            $authManager = new UserManager();
            $user = $authManager->getUser($_POST['login']);

            if ($user) {
                if (password_verify($_POST['pass'], $user->getPassword())){
                    $_SESSION['login'] = $user->getUsername();
                    $_SESSION['status'] = $user->getStatus();
                    $_SESSION['id'] = $user->getId();

                    header('Location: index.php?p=admin&message=new');
                }
            }else{
                header('Location: index.php?p=login');
            }
        }
        $this->render(['page/login']);
    }

    public function logout() {
        $_SESSION = [];
        session_destroy();

        header('Location: index.php');
        exit;
    }
}