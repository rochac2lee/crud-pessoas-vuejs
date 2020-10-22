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

    public function add() {
        include "config/connection.php";
        $model = new Model();

        $pessoa = $_POST;
        $model -> add($conn, $pessoa);
    }

    public function delete() {
        include "config/connection.php";
        $model = new Model();

        $pessoa = $_POST;
        $model -> delete($conn, $pessoa);
    }
}
