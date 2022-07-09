<?= include 'views/layout/header.php'; ?>

<div class="container">
    <h2>Tarefa</h2>

    <div class="row align-items-center justify-content-center">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h3>Dados da Tarefa</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>ID</td>
                            <th><?= $model->id ?></th>
                        </tr>
                        <tr>
                            <td>Tarefa</td>
                            <th><?= $model->name ?></th>
                        </tr>
                        <tr>
                            <td>Data de Criação</td>
                            <th><?= $model->creation_date ?></th>
                        </tr>
                        <tr>
                            <td>Situação</td>
                            <th><?= $model->status ?></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    

<?= include 'views/layout/footer.php'; ?>