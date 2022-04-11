<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pessoas</title>
</head>

<body>
    <h1>Lista de Pessoas</h1>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>RG</th>
            <th>CPF</th>
            <th>Endereço</th>
            <th>E-Mail</th>
            <th>Telefone</th>
        </tr>

        <?php foreach ($model->rows as $item) : ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['nome'] ?></td>
                <td><?= $item['rg'] ?></td>
                <td><?= $item['cpf'] ?></td>
                <td><?= $item['endereco'] ?></td>
                <td><?= $item['email'] ?></td>
                <td><?= $item['telefone'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>