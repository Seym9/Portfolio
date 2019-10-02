<?php


namespace App\Controller;


use App\Model\Database\ProjectManager;

class HomeController extends MainController {


    public function home(){
        $title = 'home';
        $objProjects = new ProjectManager();
        $projects = $objProjects->getProject();

        $this->render(['page/home'], compact('projects', 'title'));

    }
}