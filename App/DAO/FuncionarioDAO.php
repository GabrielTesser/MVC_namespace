<?php

namespace App\DAO;

use App\Model\FuncionarioModel;
use \PDO;

class FuncionarioDAO extends DAO
{
    protected $conexao;

    public function __construct()
    {
        parent::__construct();       
    }

    public function insert(FuncionarioModel $model)
    {
        $sql = "INSERT INTO funcionario (nome, cpf, data_nascimento, salario) VALUES (?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);
        $stmt->bindValue(4, $model->salario);

        $stmt->execute();
    }

    public function update(funcionarioModel $model)
    {
        $sql = "UPDATE funcionario SET nome=?, cpf=?, data_nascimento=?, salario=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);
        $stmt->bindValue(4, $model->salario);
        $stmt->bindValue(5, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM funcionario ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {

        include_once 'Model/FuncionarioModel.php';

        $sql = "SELECT * FROM funcionario WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("FuncionarioModel");

    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM funcionario WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}
