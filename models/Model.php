<?php 

class Model {
    public function index($conn) {
        $select = "SELECT id, nome, YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dataNasc))) AS idade from pessoas";
        $result = $conn -> prepare($select);
        $result -> execute();
        return $result -> fetch(PDO::FETCH_ASSOC);
    }
}