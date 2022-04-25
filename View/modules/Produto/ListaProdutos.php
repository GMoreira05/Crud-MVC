<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>

<body>
    <h1>Lista de Produtos</h1>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descricao</th>
            <th>Valor</th>
            <th>Data Adicionado</th>
        </tr>

        <?php foreach ($model->rows as $item) : ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['nome'] ?></td>
                <td><?= $item['descricao'] ?></td>
                <td><?= $item['valor'] ?></td>
                <td><?= $item['data_adicionado'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>