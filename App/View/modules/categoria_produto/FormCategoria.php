<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de categoria</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <fieldset>
        <form  method="post" action="/categoria/form/save">

                <legend>Cadastro de categoria de produto</legend>

                <label for="tipo">Tipo:</label>
                <input id="tipo" name="tipo" value="<?= $model->tipo ?>" type="text" />

                <button type="submit">Salvar</button>

        </form>
    </fieldset>
</body>
</html>