<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class AdminController extends Controller{

    
    /**
     * login page
     *
     * @return void
     */
    public function home()
    {
        $projectModel = new ProjectModel;
        $projects = $projectModel->findAll();

        return $this->render("dashboard","admin home page","backend/dashboard", compact('projects'), "adminLayout");
    }
    public function updating($id)
    {
        $projectModel = new ProjectModel;
        $project = $projectModel->findBy(['id' =>filter_var($id, FILTER_SANITIZE_STRING)])->fetch();

        return $this->render("update","update project","backend/update", compact('project'), "adminLayout");
    }
    public function createProject()
    {
        $coachModel = new ProjectModel;

        $coachModel->setTitle(htmlentities($_POST["title"]));
        $coachModel->setTechno(htmlentities($_POST["techno"]));
        $coachModel->create();
        header('Location:/admin/dashboard');
    }

    public function updateProject($id)
    {
        $coachModel = new ProjectModel;

        $coachModel->setTitle(htmlentities($_POST["title"]));
        $coachModel->setTechno(htmlentities($_POST["techno"]));
        $coachModel->update($id, 'id');
        header('Location:/admin/dashboard');
    }

    public function deleteProject($id)
    {
        $coachModel = new ProjectModel;
        $coachModel->delete($id, 'id');
        header('Location:/admin/dashboard');
    }
}