<?php

    class PessoaModel
    {
        public $id, $nome, $rg, $cpf, $data_nascimento, $email, $telefone, $endereco;

        public function save()
        {
            include 'DAO/PessoaDAO.php';
            
            $dao = new PessoaDAO();

            if($this->id == null){
                $dao->insert($this);
            }else{
                
            }
        }
    }

?>