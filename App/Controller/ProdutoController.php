<?php

namespace App\Controller;
use App\Model\ProdutoModel;

class ProdutoController extends Controller
{

    public static function index()
    {

        $model = new ProdutoModel();
        $model->getAllRows();

        parent::render('Pessoa/ListaProduto', $model);
    }

    public static function form()
    {
        $model = new ProdutoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

      parent::render('Pessoa/ListaProduto', $model);

    }

    public static function save()
    {

        $model = new ProdutoModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->preco = $_POST['preco'];
        $model->descricao = $_POST['descricao'];


        $model->save();

        header("location: /produto");
    }

    public static function delete()
    {

        $model = new ProdutoModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /produto");
    }
}