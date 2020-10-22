<?php 

/**
 * Classe View da Aplicação
 *
 * @copyright (c) 2020, Cleberli da Rocha
 */
class View {
        
    /**
     * Método home renderiza a view da aplicação 
     *
     * @param  array $data contém os registros do banco que será enviado ao objeto Vue
     * @return void
     */
    public function home($data) {
        include "templates/header.php";
        include "pages/home.php";
        include "templates/footer.php";
        include "public/js/js.php";
    }

}
