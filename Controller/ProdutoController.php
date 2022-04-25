<?php

/**
 * Classe para determinar quais rotas...
 */
class ProdutoController 
{
    /**
     * 
     */
    public static function index() 
    {
        include 'Model/ProdutoModel.php';
        $model = new ProdutoModel();
        $model->getAllRows();

        include 'View/modules/Produto/ListaProdutos.php';
    }

    /**
     * 
     */
    public static function form()
    {
        include 'View/modules/Produto/FormProduto.php';
    }

    /**
     * 
     */
    public static function save() {

        include 'Model/ProdutoModel.php';

        $produto = new ProdutoModel();
        $produto->nome = $_POST['nome'];
        $produto->descricao = $_POST['descricao'];
        $produto->valor = $_POST['valor'];
        $produto->data_adicionado = $_POST['data_adicionado'];
        $produto->save();

        echo 'Registro inserido com sucesso!';
    }
}