<?php


namespace App\Controller;


use App\Model\Database\ProjectManager;

class ProjectController extends MainController {

    public function createProject()
    {
        $project = new ProjectManager();
        if ($_SESSION['status'] === 'ADMIN') {
            if (isset($_POST['name'])) {

                if (isset($_FILES['image'])) {

                    $fileExt = explode('.', $_FILES['image']['name']);
                    $fileExt = end($fileExt);

                    $name = uniqid() . '.' . $fileExt;
                    $destination = ROOT . "/public/images/portfolio/";

                    move_uploaded_file($_FILES['image']['tmp_name'], $destination . $name);
                }
                $project->sendProject(
                    $_POST['name'],
                    $_POST['description'],
                    $name,
                    $_POST['stack'],
                    $_POST['link'],
                    $_POST['github']
                );
            }
            $this->render(['admin/projectCreation']);
        }else {
            header('Location: index.php?p=login');
        }

    }

    public function deleteProject() {

        if ($_SESSION['status'] === 'ADMIN'){
            $project = new ProjectManager();
            $project->delProject($_GET['id']);

            header('Location: index.php?p=admin');
        }else {
            header('Location: index.php?p=login');
        }
    }
}