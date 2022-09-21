<?php

namespace App\Controller;
use App\Model\CategoriaModel;

class CategoriaController extends Controller
{

    public static function index() 
    {

        $model = new CategoriaModel();
        $model->getAllRows();

        parent::render('Pessoa/ListaCategoria', $model);
    }

    public static function form()
    {

        $model= new CategoriaModel();

        if(isset($_GET['id'])) {
            $model = $model->getById( (int) $$_GET['id']);
        }

        parent::render('Pessoa/ListaCategoria', $model);
    }

    public static function save() 
    {


        $model = new CategoriaModel();

        $model->id = $_POST['id'];
        $model->tipo = $_POST['tipo'];

        $model->save();

        header("Location: /categoria"); 
    }

    public static function delete()
    {

        include 'Model/CategoriaModel.php';

        $model = new CategoriaModel();

        $model->delete ( (int) $_GET['id']);

        header ("Location: /categoria");
    }
}