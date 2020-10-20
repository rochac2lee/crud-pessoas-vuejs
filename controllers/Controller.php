<?php 

include 'models/Model.php';

class Controller {

    public function index() {

        $model = new Model();

        $title = "Cadastro de Pessoas";
        $view = new View();
        $view->home($title);
        
    }
}
