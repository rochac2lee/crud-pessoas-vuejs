<?php 

require "config/database.php";

class Model {
    public function index() {
        return $this -> db -> get("pessoas") -> result();
    }
}