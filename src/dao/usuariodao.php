<?php
require_once 'DAOconexao.php';


class AlunoDAO {

    public function login($matricula, $senha) {
        $dbh = Conexao::getConexao();
        $query = "SELECT * FROM usuarios WHERE `matricula` = :matricula and `senha` = :senha;";

        $statement = $dbh->prepare($query);
        $statement->bindParam(":matricula",$matricula); 
        $statement->bindParam(":senha",$senha); 
        $statement->execute(); 
        
        $return = $statement->fetch(PDO::FETCH_ASSOC);
        return $return; 
    
    }
}
