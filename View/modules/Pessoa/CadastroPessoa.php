<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <style>
        input{
            width: 500px;
        }
    </style>
</head>
<body>
    <form action="/pessoa/save">
        <fieldset>
            <legend>Cadastro de Pessoa</legend>

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" /> <br>

            <label for="rg">RG:</label>
            <input type="text" name="rg" id="rg"> <br>

            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf"> <br>

            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" id="data_nascimento"> <br>

            <label for="email">E-Mail:</label>
            <input type="text" name="email" id="email"> <br>

            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone"> <br>

            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco"> <br>

            <input type="submit" value="Salvar">
        </fieldset>
    </form>
</body>
</html>