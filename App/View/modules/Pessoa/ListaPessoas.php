<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Pessoas</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
        </tr>

        <?php

            //var_dump($model->rows);

        ?>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['nome'] ?></td>
            <td><?= $item['cpf'] ?></td>
        </tr>
        <?php endforeach ?>    

    </table>
</body>
</html>