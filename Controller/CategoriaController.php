<?php

/**
 * Classe para determinar quais rotas...
 */
class CategoriaController 
{
    /**
     * 
     */
    public static function index() 
    {
        include 'Model/CategoriaModel.php';
        $model = new CategoriaModel();
        $model->getAllRows();

        include 'View/modules/Categoria/ListaCategorias.php';
    }

    /**
     * 
     */
    public static function form()
    {
        include 'View/modules/Categoria/FormCategoria.php';
    }

    /**
     * 
     */
    public static function save() {

        include 'Model/CategoriaModel.php';

        $categoria = new CategoriaModel();
        $categoria->nome = $_POST['nome'];
        $categoria->save();

        header('location: /categoria');
    }
}