<?php

include "BancoPDO.php";

class CategoriaDAO extends BancoPDO {

    public function __construct() {
        $this->conexao = BancoPDO::conexao();
    }

    public function cadastrar($categoria) {

        try {
            $stm = $this->conexao->prepare("INSERT INTO categoria (tipo, descricao) VALUES (?, ?)");

            echo $categoria->tipo;

            $stm->bindValue(1, $categoria->tipo);
            $stm->bindValue(2, $categoria->descricao);

            if ($stm->execute()) {
                echo "Dados da categoria inseridos com sucesso! <br/>";
                header("Location: main.php");
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    public function montarcombo() {

        global $con;
        $ops = "";

        try {
            $sql = $con->prepare("SELECT * FROM categorias");

            $sql->execute();
            while ($sql->fetch(PDO::FETCH_OBJ)) {
                $ops .= "<option value='" . $idcateg . "'>" . $tipo . "'>" . $descricao . "</option>";
            }

            return $ops;
        } catch (Exception $e) {
            echo"Erro: " . $e->getMessage();
        }
    }

    public function visualizarcategorias($id = "") {
        try {

            if ($id == "") {
                $stm = $this->conexao->prepare("SELECT * FROM categoria");
            } else {
                $stm = $this->conexao->prepare("SELECT * FROM categoria WHERE id = ?");
                $stm->bindParam(1, $id, PDO::PARAM_INT);
            }

            if ($stm->execute()) {
                $tabcat = "<table>"
                        . "<tread>"
                        . "<tr>"
                        . "<th>Código</th>"
                        . "<th>Tipo</th>"
                        . "<th>Descrição</th>"
                        . "</tr>"
                        . "</tread>"
                        . "<tfoot>"
                        . "<tr>"
                        . "<th>Código</th>"
                        . "<th>Tipo</th>"
                        . "<th>Descrição</th>"
                        . "</tr>"
                        . "</tfoot>";

                while ($dados = $stm->fetch(PDO::FETCH_OBJ)) {
                    $tabcat .= "<tr>"
                            . "<td>" . $dados->idcategoria . "</td>"
                            . "<td>" . $dados->tipo . "</td>"
                            . "<td>" . $dados->descricao . "</td>"
                            . "</tr>";
                }

                $tabcat .= "</table>";

                echo $tabcat;
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

}
?>

