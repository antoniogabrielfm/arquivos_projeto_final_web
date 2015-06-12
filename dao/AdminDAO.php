<?php

include "BancoPDO.php";

class AdminDAO extends BancoPDO {

    public function __construct() {
        $this->conexao = BancoPDO::conexao();
    }

    public function inserir($admin) {

        try {
            $stm = $this->conexao->prepare("INSERT INTO admin (nome, usuario, senha) VALUES (?, ?, ?)");

            echo $admin->nome;

            $stm->bindValue(1, $admin->nome);
            $stm->bindValue(2, $admin->usuario);
            $stm->bindValue(3, $admin->senha);            

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
                $stm = $this->conexao->prepare("SELECT * FROM admin");
            } else {
                $stm = $this->conexao->prepare("SELECT * FROM admin WHERE id = ?");
                $stm->bindParam(1, $id, PDO::PARAM_INT);
            }

            if ($stm->execute()) {

                $tabadmin = "<table>"
                        . "<tread>"
                        . "<tr>"
                        . "<th>Código</th>"
                        . "<th>Nome</th>"
                        . "<th>Usuário</th>"
                        . "<th>Senha</th>"                        
                        . "</tr>"
                        . "</tread>"
                        . "<tfoot>"
                        . "<tr>"
                        . "<th>Código</th>"
                        . "<th>Nome</th>"
                        . "<th>Usuário</th>"
                        . "<th>Senha</th>" 
                        . "</tr>"
                        . "</tfoot>";

                while ($dados = $stm->fetch(PDO::FETCH_OBJ)) {
                    $tabadmin .= "<tr>"
                            . "<td>" . $dados->idadmin . "</td>"
                            . "<td>" . $dados->nome . "</td>"
                            . "<td>" . $dados->usuario . "</td>"
                            . "<td>" . $dados->senha . "</td>"                            
                            . "</tr>";
                }

                $tabadmin .= "</table>";

                echo $tabadmin;
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    public function autenticar($admin) {

        try {
            $stm = $this->conexao->prepare("SELECT nome FROM admin WHERE usuario = ? AND senha = ?");

            $usuario = $admin->usuario;
            $senha = $admin->senha;
            
            $stm->bindValue(1, $usuario);
            $stm->bindValue(2, $senha);
           
            if ($stm->execute()) {
                $dados = $stm->fetch(PDO::FETCH_OBJ);
            }

            return $dados;
           
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

}
?>

