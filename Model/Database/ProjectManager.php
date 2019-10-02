<?php


namespace App\Model\Database;

use PDO;

class ProjectManager extends Manager {

    public function sendProject($name, $description, $image, $stack, $link, $github){
        $send = $this->prepare("
        INSERT INTO pf_project(project_name, project_description, project_image, project_stack, project_link, project_github) 
        VALUES (?,?,?,?,?,?) 
        ");
        $send->execute([$name, $description, $image , $stack, $link, $github]);
    }

    public function getProject(){
        $rq = $this->prepare("
        SELECT project_id AS id, 
               project_name AS name, 
               project_description AS description, 
               project_image AS image, 
               project_stack AS stack, 
               project_link AS link, 
               project_github AS github
        FROM pf_project
        ORDER BY project_id 
        ");

        $rq->execute();

        $rq->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'App\Model\Project');
        $projects = $rq->fetchAll();

        return $projects;
    }

    public function delProject($id) {
        $rq = $this->prepare("
            DELETE FROM pf_project
            WHERE project_id = ?
        ");
        $rq->execute([$id]);
    }
}