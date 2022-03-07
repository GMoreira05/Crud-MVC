<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
</head>
<body>
    <form action="/pessoa/save">
        <fieldset>
            <legend>Cadastro de Pessoa</legend>

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" />

            <label for="rg">RG:</label>
            <input type="text" name="rg" id="rg">

            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf">

            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" id="data_nascimento">

            <label for="email">E-Mail:</label>
            <input type="text" name="email" id="email">

            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone">

            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco">

            <input type="submit" value="Salvar">
        </fieldset>
    </form>
</body>
</html>