<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Categoria</h1>
    <table>
        <tr>
                <th>Id</th>
                <th>Tipo</th>
            </tr>

            <?php foreach($model->rows as $item): ?>
            <tr>

            <td>
                <a href="/categoria/delete?id=<?= $item -> id?>"> X </a> 
            </td>

            <td>
                <?= $item -> id?>
            </td>

            <td>
                <a href="/categoria/form?id<?= $item->id ?>"><?= $item->tipo ?></a>
            </td>

                <td><?= $item->tipo ?></td>
        </tr>
        <?php endforeach ?>    

        <?php if (count($model->rows) == 0): ?>

            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
</body>
</html>