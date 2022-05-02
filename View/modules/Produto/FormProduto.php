<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <style>
        label,
        input {
            display: block;
        }
    </style>
</head>

<body>
    <form action="/produto/save" method="post">
        <fieldset>
            <legend>Cadastro de Produto</legend>
            <label for="nome">Nome:</label>
            <input name="nome" id="nome" type="text" />

            <label for="valor">Valor:</label>
            <input name="valor" id="valor" type="text" />

            <label for="descricao">Descricao:</label>
            <input name="descricao" id="descricao" type="text" />

            <label for="data_adicionado">Data de Adição:</label>
            <input name="data_adicionado" id="data_adicionado" type="date" />

            <label for="id_categoria">ID Da Categoria:</label>
            <input name="id_categoria" id="id_categoria" type="text" />

            <button type="submit">Enviar</button>

        </fieldset>
    </form>

</body>

</html>