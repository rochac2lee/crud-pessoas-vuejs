<?php 

/** Inclusão dos arquivos de aplicação do padrão MVC */
include 'controllers/Controller.php';
include 'views/View.php';

$controller = new Controller();

if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
} else {
    $acao = "";
}

switch ($acao) {
    case "add": 
        $controller->add();
        break;

    case "delete": 
        $controller->delete();
        break;

    default: 
        $controller->index();
        break;

}

