<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
</head>

<body>
    <div class="container">
        <h1>Lista de Produtos</h1>
        <table class="bordered striped centered highlight responsive-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descricao</th>
                    <th>Valor</th>
                    <th>Data Adicionado</th>
                    <th>Categoria</th>
                </tr>
            </thead>

            <?php foreach ($model->rows as $item) : ?>
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['nome'] ?></td>
                    <td><?= $item['descricao'] ?></td>
                    <td><?= $item['valor'] ?></td>
                    <td><?= $item['data_adicionado'] ?></td>
                    <td><?= $item['categoria'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>