<?php

require_once 'Autoloader.php';
require_once 'config.php';

use App\Autoloader;
use App\Controller\AuthController;
use App\Controller\HomeController;
use App\Controller\MessageController;
use App\Controller\ProjectController;

session_start();
Autoloader::register();

if (!empty($_GET['p'])) {
    if ($_GET['p'] === 'send-message') {
        $post = new MessageController();
        $post->sendMessage();
    }elseif ($_GET['p'] === 'admin'){
        $adminHome = new MessageController();
        $adminHome->getMessage();
    }elseif ($_GET['p'] === 'login'){
        $auth = new AuthController();
        $auth->login();
    }elseif ($_GET['p'] === 'logout'){
        $login = new AuthController();
        $login->logout();
    }elseif ($_GET['p'] === 'project' && isset($_GET['id'])){
        $login = new ProjectController();
        $login->deleteProject();
    }elseif ($_GET['p'] === 'project'){
        $login = new ProjectController();
        $login->createProject();
    }elseif ($_GET['p'] === 'update-message'){
        $login = new MessageController();
        $login->updateStatus() ;
    }else{
        header("HTTP/1.0 404 Not Found");
        exit();
    }
}else{
    $home = new HomeController();
    $home->home();
}