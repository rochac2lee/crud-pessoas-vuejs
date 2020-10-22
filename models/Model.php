<?php 

class Model {
    public function index($conn) {
        $select = "SELECT id, nome, date_format(dataNasc,'%d/%m/%Y') as dataNasc, YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dataNasc))) AS idade from pessoas";
        $result = $conn -> prepare($select);
        $result -> execute();
        return $result -> fetchAll(PDO::FETCH_OBJ);
    }

    public function add($conn, $pessoa) {

        $nome = $pessoa['nome'];

        $select = "SELECT * from pessoas WHERE nome = '$nome'";
        $result = $conn -> prepare($select);
        $result -> execute();
        $count = $result->rowCount();
        
        if ($count == NULL) {

            $insert = $conn -> prepare("INSERT INTO pessoas (nome, dataNasc) VALUES (:nome, :dataNasc);");
            $insert->bindValue(":nome", $pessoa['nome']);
            $insert->bindValue(":dataNasc", $pessoa['dataNasc']);
            $insert->execute();

        } else {
            return false;
        }

    }

    public function delete($conn, $pessoa) {
        $id = $pessoa['id'];
        $conn->exec("DELETE FROM pessoas WHERE id = '$id'");
    }

    public function edit($conn, $pessoa) {
        $id = $pessoa['id'];
        $select = "SELECT 
                    id, nome, 
                    date_format(dataNasc,'%d/%m/%Y') as dataNasc, 
                    YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dataNasc))) AS idade 
                   from pessoas WHERE WHERE id = '$id'";
        $result = $conn -> prepare($select);
        $result -> execute();
        return $result -> fetchAll(PDO::FETCH_OBJ);
    }

}