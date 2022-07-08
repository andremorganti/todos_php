<?= include 'views/layout/header.php'; ?>
    <?php var_dump($model); ?> <br>
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
                            <input type="hidden" name="id" value="<?= $model->id ?>" />
                            <div class="mb-3">
                                <label for="name" class="control-label" class="form-label">Nome</label>
                                <input type="text" id="name" name="name"  placeholder="Nome do Todo" required class="form-control"
                                    value="<?php echo $model->name == null ? '' : $model->name ?>" placeholder=''>
                            </div>

                            <div class="mb-3">
                                <label for="creation_date" class="form-label">Data de Criação</label>
                                <input type="date" id="creation_date" name="creation_date" class="form-control"
                                    value="<?= $model->creation_date ?>">
                            </div>

                            <div class="mb-3">
                                <label for="status" class="control-label" class="form-label">Status</label>
                                <select name="status" id="status" required class="form-select">
                                    <option value="Criada" <?php  if($model->status == 'Criada') { echo 'selected="selected"'; } ?>>Criada</option>: '';} ?>>Criada</option>
                                    <option value="Em Execução" <?php if($model->status == 'Em Execução') { 'selected="selected"'; } ?>>Em Execução</option>
                                    <option value="Planejada" <?php if ($model->status == 'Planejada') {echo 'selected="selected"'; } ?>>Planejada</option>
                                    <option value="Atrasada" <?php if($model->status == 'Atrasada') { echo 'selected="selected"'; } ?>>Atrasada</option>
                                    <option value="Completada" <?php if($model->status == 'Completada') { echo 'selected="selected"'; } ?>>Completada</option>
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