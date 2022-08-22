<?php

spl_autoload_register(function ($nome_da_classe) 
{

    $arquivo_classe = dirname(__FILE__, 2) . '/' . $nome_da_classe . '.php';

    if(file_exists($arquivo_classe))
    {
        include $arquivo_classe;
    } else
        echo "Arquivo não encontrado: " . $arquivo_classe;
        
});