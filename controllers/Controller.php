<?php 

include 'models/Model.php';

/**
 * Classe Controller
 *
 * @copyright (c) 2020, Cleberli da Rocha
 */
class Controller {
    
    /**
     * Método index do Controller solicita ao Model todos os registros do banco de dados
     *
     * @return void
     */
    public function index() {

        include "config/connection.php";
        $model = new Model();

        $data['pessoas'] = $model -> index($conn);
        $data['title'] = "Cadastro de Pessoas";
        $view = new View();
        $view->home($data);
        
    }
    
    /**
     * Método add envia os dados de um novo registro ao banco de dados
     *
     * @return void
     */
    public function add() {
        include "config/connection.php";
        $model = new Model();

        $pessoa = $_POST;
        $model -> add($conn, $pessoa);
    }
    
    /**
     * Método delete passa ao model o registro a ser excluído do banco de dados
     *
     * @return void
     */
    public function delete() {
        include "config/connection.php";
        $model = new Model();

        $pessoa = $_POST;
        $model -> delete($conn, $pessoa);
    }

}
