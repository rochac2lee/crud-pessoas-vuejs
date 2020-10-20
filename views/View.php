<?php 

class View {
    
    public function home($title) {
        include "templates/header.php";
        include "pages/home.php";
        include "templates/footer.php";
    }

}
