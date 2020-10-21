<?php 

include 'models/Model.php';

class Controller {

    public function index() {

        include "config/connection.php";
        $model = new Model();

        $data['pessoas'] = $model -> index($conn);
        $data['title'] = "Cadastro de Pessoas";
        $view = new View();
        $view->home($data);
        
    }

    public function delete($id) {
        include "config/connection.php";
        $model = new Model();

        $data['pessoas'] = $model -> delete($id, $conn);
        $view = new View();
        $view->home($data);
    }
}
