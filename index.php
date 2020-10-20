<?php 

/** Inclusão dos arquivos de aplicação do padrão MVC */
include 'controllers/Controller.php';
include 'views/View.php';

$controller = new Controller();
$controller->index();