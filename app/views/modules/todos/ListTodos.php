<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Todos</title>
    <style>
        .button {
            padding: 7px 16px;
            text-align: center;
            display: inline-block;
            border: none;
        }

        .delete {
            background-color: red;
            color: white;
        }

        .update {
            background-color: blue;
            color: white;
        }
        .table-head {
            padding: 15px 32px;
            background-color: lightblue;
    </style>
</head>
<body>
    <main class="container">
        <table class="table">
            <thead>
                <tr class="table-head">
                    <th>ID</th>
                    <th>Tarefa</th>
                    <th>Data de Criação</th>
                    <th>Situação</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                 <?php foreach ($model->rows as $item): ?>
                    <tr>
                        <td><?= $item->id ?></td>
                        <td><?= $item->name ?></td>
                        <td><?= $item->creation_date ?></td>
                        <td><?= $item->status ?></td>
                        <td>
                            <a href="/todos/edit?id=<?= $item->id ?>" class="button update">Alterar</a>
                        </td>
                        <td>
                            <a href="/todos/delete?id=<?= $item->id ?>" class="button delete">Remover</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </main>
    
</body>
</html>