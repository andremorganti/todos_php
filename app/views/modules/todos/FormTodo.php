<?= include 'views/layout/header.php'; ?>
        <?= var_dump($model->rows) ?>
        <?= $model->rows[0]->id ?>
    <div class="container">
        <h2>Tarefa</h2>

        <div class="row align-items-center justify-content-center">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Dados da Tarefa</h3>
                    </div>
                    <div class="card-body">
                        <form action="/todos/form/save" method="post">
                            <input type="hidden" name="id" value="<?= $model->rows[0]->id ?>" />
                            <div class="mb-3">
                                <label for="name" class="control-label" class="form-label">Nome</label>
                                <input type="text" id="name" name="name" value="<?= $model->rows[0]->name ?>" placeholder="Nome do Todo" required class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="creation_date" class="form-label" value="<?= $model->rows[0]->creation_date ?>">Data de Criação</label>
                                <input type="date" id="creation_date" name="creation_date" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="status" class="control-label" class="form-label">Status</label>
                                <select name="status" id="status" required class="form-select">
                                    <option value="Criada" "<?= $model->rows->status == 'Criada' ? 'selected' : ''; ?></option>">Criada</option> >Criado</option>
                                    <option value="Em Execução">Em execução</option>
                                    <option value="Atrasada">Atrasada</option>
                                    <option value="Completada">Completada</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="fomm-submit btn btn-success">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<?= include 'views/layout/footer.php'; ?>