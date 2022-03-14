<?php

    class PessoaController
    {
        public static function index(){
            include 'View/modules/Pessoa/ListaPessoas.php';
        }

        public static function save(){
            include 'Model/PessoaModel.php';

            $pessoa = new PessoaModel();
            $pessoa->nome = $_POST['nome'];
            $pessoa->rg = $_POST['rg'];
            $pessoa->cpf = $_POST['cpf'];
            $pessoa->data_nascimento = $_POST['data_nascimento'];
            $pessoa->email = $_POST['email'];
            $pessoa->telefone = $_POST['telefone'];
            $pessoa->endereco = $_POST['endereco'];
        }

        public static function form(){
            include 'View/modules/Pessoa/CadastroPessoa.php';
        }
    }

?>