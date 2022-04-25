<?php

class ProdutoModel
{
    public $id, $nome, $valor, $descricao, $data_adicionado;

    public $rows;

    public function save()
    {
        include 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO();

        if($this->id == null) {
            $dao->insert($this);
        } else {
            // update
        }
    }

    public function getAllRows(){
        include 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO();

        $this->rows = $dao->getAllRows();
    }
}