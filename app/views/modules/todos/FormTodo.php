<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Todo</title>
    <style>
        label, input {
            display: block;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Todo</legend>

        <?= var_dump($model) ?>

        <form action="/todos/form/save" method="post">
            <label for="name" class="control-label">Nome</label>
            <input type="text" id="name" name="name" placeholder="Nome do Todo" required>

            <label for="creation_date">Data de Criação</label>
            <input type="date" id="creation_date" name="creation_date">

            <label for="status" class="control-label">Status</label>
            <select name="status" id="status" required>
                <option value="created">Criado</option>
                <option value="executing">Em execução</option>
                <option value="delayed">Atrasado</option>
                <option value="completed">Completo</option>
            </select>

            <button type="submit">Salvar</button>
        </form>
    </fieldset>
</body>
</html>