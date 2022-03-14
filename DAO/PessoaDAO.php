<?php

    class PessoaDAO
    {
        private $conexao;

        function __construct(){
            $dns = "mysql:host=localhost;dbname=db_sistema";
            $user = "root";
            $pass = "etecjau";

            $this->conexao = new PDO($dns, $user, $pass);
        }

        function insert(PessoaModel $model){
            $sql = "INSERT INTO pessoa (nome, rg, cpf, data_nascimento, email, telefone, endereco) VALUES (?, ?, ?, ?, ?, ?, ?)";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->nome);
            $stmt->execute();
        }
    }

?>