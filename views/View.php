<?php 

class View {
    
    public function home($data) {
        include "templates/header.php";
        include "pages/home.php";
        include "templates/footer.php";
        include "public/js/app.php";
    }

}
