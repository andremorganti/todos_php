    <?php include 'views/layout/header.php'; ?>

    <main class="container">
        <div class="">
            <a href="/todos/new" class="btn btn-success">Nova Tarefa</a>
        </div>
        <div class="row">

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
                                <a href="/todos/edit?id=<?= $item->id ?>" class="btn btn-primary">Alterar</a>
                            </td>
                            <td>
                                <a href="/todos/delete?id=<?= $item->id ?>" class="btn btn-danger">Remover</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </main>

    <?php include 'views/layout/footer.php'; ?>