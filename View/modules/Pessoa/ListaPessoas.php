<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pessoas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
</head>

<body>
    <div class="container">
        <h1>Lista de Pessoas</h1>
        <table class="bordered striped centered highlight responsive-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>RG</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                    <th>E-Mail</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($model->rows as $item) : ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['nome'] ?></td>
                        <td><?= $item['rg'] ?></td>
                        <td><?= $item['cpf'] ?></td>
                        <td><?= $item['endereco'] ?></td>
                        <td><?= $item['email'] ?></td>
                        <td><?= $item['telefone'] ?></td>
                        <td>
                            <a href="/pessoa/form?id=<?= $item['id'] ?>" class="waves-effect waves-light btn">Editar</a>
                            <a href="/pessoa/excluir?id=<?= $item['id'] ?>" class="waves-effect waves-light btn">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>