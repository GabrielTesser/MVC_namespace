<?php

namespace App\Model;
use App\DAO\FuncionarioDAO;

class funcionarioModel extends Model
{
    public $id, $nome, $cpf, $data_nascimento, $salario;

    public $row;

    public function save()
    {
        $dao = new FuncionarioDAO();

        if(empty($this->id))
        {

            $dao->insert($this);
        } else {

            $dao->update($this);
        }
    }

    public function getAllRows()
    {

        $dao = new FuncionarioDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {

        $dao = new FuncionarioDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new FuncionarioModel();
    }

    public function delete(int $id)
    {

        $dao = new FuncionarioDAO();

        $dao->delete($id);
    }
}