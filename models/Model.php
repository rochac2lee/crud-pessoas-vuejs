<?php 

/**
 * Classe Model da Aplicação
 *
 * @copyright (c) 2020, Cleberli da Rocha
 */
class Model {
        
    /**
     * Método index busca todos os registros no banco e retorna o resultado para o controller enviar ao Front-End
     *
     * @param  object $conn
     * @return void
     */
    public function index($conn) {
        $select = "SELECT id, nome, date_format(dataNasc,'%d/%m/%Y') as dataNasc, YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dataNasc))) AS idade from pessoas";
        $result = $conn -> prepare($select);
        $result -> execute();
        return $result -> fetchAll(PDO::FETCH_OBJ);
    }
    
    /**
     * Método add pesquisa se tem algum nome igual ao cadastrado, caso não tenha, faz a inserção no banco
     *
     * @param  object $conn
     * @param  array $pessoa
     * @return void
     */
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
    
    /**
     * Método delete faz a exclusão dos dados após confirmação do usuário no Front-End
     *
     * @param  object $conn
     * @param  array $pessoa
     * @return void
     */
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