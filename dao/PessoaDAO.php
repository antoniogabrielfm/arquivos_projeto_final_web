<?php

include "BancoPDO.php";

class PessoaDAO extends BancoPDO {

    public function __construct() {
        $this->conexao = BancoPDO::conexao();
    }

    public function inserir($pessoa) {

        try {
            $stm = $this->conexao->prepare("INSERT INTO pessoa (nome, email, telefone, celular, categoria) VALUES (?, ?, ?, ?, ?)");

            echo $pessoa->nome;

            $stm->bindValue(1, $pessoa->nome);
            $stm->bindValue(2, $pessoa->email);
            $stm->bindValue(3, $pessoa->telefone);
            $stm->bindValue(4, $pessoa->celular);
            $stm->bindValue(5, $pessoa->categoria);
            
            if ($stm->execute()) {
                echo "Dados inseridos com sucesso! <br/>";
                header("Location: main.php");
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    public function visualizar($id = "") {

        try {

            if ($id == "") {
                $stm = $this->conexao->prepare("SELECT * FROM pessoa");
            } else {
                $stm = $this->conexao->prepare("SELECT * FROM pessoa WHERE id = ?");
                $stm->bindParam(1, $id, PDO::PARAM_INT);
            }

            if ($stm->execute()) {

                $tabpessoa = "<table>"
                        . "<tread>"
                        . "<tr>"
                        . "<th>Código</th>"
                        . "<th>Nome</th>"
                        . "<th>Email</th>"
                        . "<th>Telefone</th>"
                        . "<th>Celular</th>"
                        . "<th>Categoria</th>"
                        . "</tr>"
                        . "</tread>"
                        . "<tfoot>"
                        . "<tr>"
                        . "<th>Código</th>"
                        . "<th>Nome</th>"
                        . "<th>Email</th>"
                        . "<th>Telefone</th>"
                        . "<th>Celular</th>"
                        . "<th>Categoria</th>"
                        . "</tr>"
                        . "</tfoot>";

                while ($dados = $stm->fetch(PDO::FETCH_OBJ)) {
                    $tabpessoa .= "<tr>"
                            . "<td>" . $dados->id . "</td>"
                            . "<td>" . $dados->nome . "</td>"
                            . "<td>" . $dados->email . "</td>"
                            . "<td>" . $dados->telefone . "</td>"
                            . "<td>" . $dados->celular . "</td>"
                            . "<td>" . $dados->categoria . "</td>"
                            . "</tr>";
                }

                $tabpessoa .= "</table>";

                echo $tabpessoa;
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

}

?>